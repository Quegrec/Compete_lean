@echo off

if "%~1" neq "_start_" (
    cmd /c "%~f0" _start_ %*
    echo "Press any key to exit..."
    pause >nul
    taskkill /f /t /fi "WINDOWTITLE eq culturally-*"
    symfony server:stop
    taskkill /f /t /fi "WINDOWTITLE eq culturally-*"
    symfony server:stop
    exit /b
)
shift /1

start symfony serve
start npm run watch