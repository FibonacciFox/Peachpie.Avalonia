# Peachpie.Avalonia Rider Plugin

Этот каталог содержит каркас Rider-плагина, который будет использовать `.peachpie-rider/index.json`,
сгенерированный `Peachpie.Avalonia.RiderCli`.

Текущая цель:
- читать индекс проекта;
- давать navigation для `x:Class`, `x:DataType` и binding paths;
- готовить слой для completion в `.axaml`.

Пока здесь заложен frontend-каркас и договорённость по упаковке плагина.
Основная рабочая логика сейчас живёт в:
- `../Peachpie.Avalonia.RiderModel`
- `../Peachpie.Avalonia.RiderCli`

Следующий шаг по этому каталогу:
- добавить backend/frontend интеграцию Rider SDK;
- повесить resolve/completion на PSI references в `.axaml`;
- заменить временное чтение JSON на live-refresh при изменении проекта.
