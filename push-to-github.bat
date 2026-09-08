@echo off
echo ===================================================
echo Kelvin Cameo Organization - Git Auto Push
echo ===================================================
cd /d "C:\Users\HP\kelvin-cameo-organization"

echo Current Directory: %CD%
echo.
echo Adding all updated files...
git add .

echo Committing changes...
git commit -m "feat: add WordPress theme, templates, SEO schema, and WP Pusher support"

echo.
echo Pushing to GitHub (belloajetayo/kelvincameoall)...
git push origin main

echo.
if %ERRORLEVEL% equ 0 (
    echo ===================================================
    echo [SUCCESS] Successfully pushed to GitHub!
    echo ===================================================
) else (
    echo ===================================================
    echo [NOTE] If you were prompted for login, complete the
    echo login in your browser or terminal to finish the push.
    echo ===================================================
)
echo.
pause
