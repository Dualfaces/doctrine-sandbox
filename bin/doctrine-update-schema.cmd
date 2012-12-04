@echo off
:update
php console.php orm:schema:update --force
pause
goto update