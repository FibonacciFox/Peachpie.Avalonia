<?php

namespace Peachpie\Avalonia\Core;

use Avalonia\Controls\ApplicationLifetimes\IApplicationLifetime;
use InvalidArgumentException;

class AppPhpBuilder
{

    /**
     * Конфигурирует сборщик приложений с указанным типом приложения.
     *
     * @param string $applicationType Полное имя типа приложения, включая пространство имен.
     * @return AppPhpBuilder Возвращает экземпляр AppPhpBuilder.
     * @throws InvalidArgumentException Если тип приложения равен null или недействителен.
     */
    public static function configure(string $applicationType): AppPhpBuilder
    {
        if (empty($applicationType)) {
            throw new InvalidArgumentException("Application type must be provided.");
        }

        return new AppPhpBuilder($applicationType);
    }

    /**
     * Конструктор.
     *
     * @param AppPhpBuilder $appBuilder Экземпляр AppBuilder.
     */
    private function __construct(AppPhpBuilder $appBuilder)
    {

    }

    /**
     * Определяет платформу для приложения.
     *
     * @return AppPhpBuilder Возвращает текущий экземпляр AppPhpBuilder.
     */
    public function usePlatformDetect(): AppPhpBuilder
    {
        return $this;
    }

    /**
     * Настраивает приложение с указанным временем жизни.
     *
     * @param IApplicationLifetime $lifetime Время жизни приложения.
     * @return AppPhpBuilder Возвращает текущий экземпляр AppPhpBuilder.
     */
    public function setupWithLifetime(IApplicationLifetime $lifetime): AppPhpBuilder
    {
        return $this;
    }

    /**
     * Использует шрифт Inter в приложении.
     *
     * @return AppPhpBuilder Возвращает текущий экземпляр AppPhpBuilder.
     */
    public function withInterFont(): AppPhpBuilder
    {
        return $this;
    }

    /**
     * Включает логирование в трассировку для приложения.
     *
     * @return AppPhpBuilder Возвращает текущий экземпляр AppPhpBuilder.
     */
    public function logToTrace(): AppPhpBuilder
    {
        return $this;
    }
}
