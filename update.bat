echo OFF
set ENV=prod
if "%1" NEQ "" (
    set ENV=%1
)
git pull
composer update
php vendor/doctrine/doctrine-module/bin/doctrine-module.php orm:schema-tool:update --force || goto :error
goto :EOF

:error
echo Failed with error #%ERRORLEVEL%.
exit /b %ERRORLEVEL%