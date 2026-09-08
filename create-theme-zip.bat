@echo off
echo =======================================================
echo Kelvin Cameo Organization - WordPress Theme Packager
echo =======================================================
echo Packaging theme files into kelvin-cameo-theme.zip...

powershell -Command "Compress-Archive -Path 'style.css', 'functions.php', 'header.php', 'footer.php', 'front-page.php', 'page-hospitality.php', 'page-energy.php', 'page-real-estate.php', 'page-agriculture.php', 'page-about.php', 'page-contact.php', 'page.php', 'index.php', 'css', 'js', 'assets' -DestinationPath 'kelvin-cameo-theme.zip' -Force"

if exist kelvin-cameo-theme.zip (
    echo.
    echo =======================================================
    echo [SUCCESS] kelvin-cameo-theme.zip created successfully!
    echo =======================================================
    echo You can now upload this zip file to InstaWP or any WordPress site:
    echo 1. Open your WordPress Admin (on InstaWP or live host)
    echo 2. Go to: Appearance ^> Themes ^> Add New ^> Upload Theme
    echo 3. Choose kelvin-cameo-theme.zip and click "Install Now"
    echo 4. Click "Activate"
) else (
    echo.
    echo [ERROR] Failed to create kelvin-cameo-theme.zip.
)
echo.
pause
