@echo off
chcp 65001

:retry

dotnet clean & dotnet build

if %errorlevel% neq 0 (
    echo Ошибка сборки, пробую пересобрать проект
    goto :retry
)

echo Сборка проекта выполнена успешно, запускаю проект.
dotnet run --project Application