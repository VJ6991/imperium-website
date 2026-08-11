<#
    serve.ps1 - start the imperium-lite dev server.

    Usage:  .\serve.ps1            # http://127.0.0.1:8001
            .\serve.ps1 -Port 8080
            .\serve.ps1 -ClearCache   # wipe compiled Blade views first
            .\serve.ps1 -Lan          # also reachable from phones/other machines

    Finds php.exe even when it is not on PATH (e.g. XAMPP installs).

    Note: binds 127.0.0.1, NOT "localhost". PHP's built-in server opens a single
    socket, and "localhost" makes it bind IPv6 ::1 only - which leaves
    http://127.0.0.1:<port> refusing connections.
#>
param(
    [int]$Port = 8001,
    [switch]$ClearCache,
    [switch]$Lan
)

$ErrorActionPreference = 'Stop'

# Always run from the folder holding this script - router.php resolves paths relative to CWD.
Set-Location -Path $PSScriptRoot

function Resolve-Php {
    $cmd = Get-Command php -ErrorAction SilentlyContinue
    if ($cmd) { return $cmd.Source }

    $candidates = @(
        'C:\xampp\php\php.exe',
        'C:\laragon\bin\php\php.exe',
        'C:\php\php.exe',
        'C:\tools\php\php.exe',
        "$env:LOCALAPPDATA\Programs\php\php.exe"
    )
    foreach ($c in $candidates) {
        if (Test-Path $c) { return $c }
    }

    # wamp / laragon nest php under a versioned folder
    foreach ($root in @('C:\wamp64\bin\php', 'C:\laragon\bin\php')) {
        if (Test-Path $root) {
            $found = Get-ChildItem -Path $root -Filter php.exe -Recurse -Depth 2 -ErrorAction SilentlyContinue |
                     Select-Object -First 1
            if ($found) { return $found.FullName }
        }
    }

    return $null
}

$php = Resolve-Php
if (-not $php) {
    Write-Host "Could not find php.exe." -ForegroundColor Red
    Write-Host "Install PHP (or XAMPP), or edit the candidate list in serve.ps1." -ForegroundColor Red
    exit 1
}

if ($ClearCache) {
    if (Test-Path .\cache) {
        Get-ChildItem .\cache -File -Exclude '.gitkeep' | Remove-Item -Force
        Write-Host "Cleared compiled views in .\cache" -ForegroundColor Yellow
    }
}

$bind = if ($Lan) { '0.0.0.0' } else { '127.0.0.1' }

Write-Host "PHP    : $php"
Write-Host "Serving: $PSScriptRoot"
Write-Host "URL    : http://127.0.0.1:$Port"
if ($Lan) {
    $ip = (Get-NetIPAddress -AddressFamily IPv4 -ErrorAction SilentlyContinue |
           Where-Object { $_.IPAddress -notlike '127.*' -and $_.IPAddress -notlike '169.254.*' } |
           Select-Object -First 1 -ExpandProperty IPAddress)
    if ($ip) { Write-Host "LAN    : http://${ip}:$Port" }
}
Write-Host "Ctrl+C to stop.`n"

& $php -S "${bind}:$Port" router.php
