@echo off
echo Starting Imperium CMS...
echo.
echo Please navigate to http://localhost:8001 in your browser.
echo Press Ctrl+C to stop the server.
echo.
cd /d "%~dp0"
php -c "C:\Users\VishnuVijayan\AppData\Local\Microsoft\WinGet\Packages\PHP.PHP.8.3_Microsoft.Winget.Source_8wekyb3d8bbwe\php.ini" -S localhost:8001
