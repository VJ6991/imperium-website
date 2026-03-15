@echo off
echo Starting Imperium CMS...
echo.
echo Please navigate to http://localhost:8001 in your browser.
echo Press Ctrl+C to stop the server.
echo.
cd /d "%~dp0"
php -S localhost:8001
