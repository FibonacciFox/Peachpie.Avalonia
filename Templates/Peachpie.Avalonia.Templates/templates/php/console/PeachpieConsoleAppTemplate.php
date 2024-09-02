<?php

// Пример использования класса / Example of class usage
use PeachpieConsoleAppTemplate\Event;

$event = new Event('My Birthday', '2024-09-10');

echo $event->getDescription() . "\n";
echo "Days until event: " . $event->daysUntil() . "\n";

$event->postpone(5);
echo "After postponing 5 days: " . $event->getDescription() . "\n";

$event->advance(3);
echo "After advancing 3 days: " . $event->getDescription() . "\n";

