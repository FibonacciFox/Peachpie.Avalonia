<?php

namespace PeachpieConsoleAppTemplate;

use DateTime;
use Exception;

/**
 * Class Event
 *
 * Этот класс представляет событие с определенным названием и датой.
 * Позволяет управлять датой события, откладывать или приближать его,
 * а также получать информацию о количестве дней до события.
 *
 * This class represents an event with a specific title and date.
 * It allows managing the event date, postponing or advancing it,
 * and getting information about the number of days until the event.
 */
class Event
{
    private string $title;
    private DateTime $date;

    /**
     * Конструктор класса Event.
     *
     * Принимает название события и дату в формате 'Y-m-d' или 'Y-m-d H:i:s'.
     *
     * Constructor for the Event class.
     *
     * Accepts the event title and date in 'Y-m-d' or 'Y-m-d H:i:s' format.
     *
     * @param string $title Название события / Event title
     * @param string $date Дата события / Event date
     * @throws Exception
     */
    public function __construct(string $title, string $date)
    {
        $this->title = $title;
        $this->date = new DateTime($date);
    }

    /**
     * Возвращает дату события в формате 'd-m-Y'.
     *
     * Returns the event date in 'd-m-Y' format.
     *
     * @return string Дата события / Event date
     */
    public function getDate(): string
    {
        return $this->date->format('d-m-Y');
    }

    /**
     * Откладывает событие на указанное количество дней.
     *
     * Postpones the event by the specified number of days.
     *
     * @param int $days Количество дней для откладывания / Number of days to postpone
     */
    public function postpone(int $days): void
    {
        $this->date->modify("+$days days");
    }

    /**
     * Приближает событие на указанное количество дней.
     *
     * Advances the event by the specified number of days.
     *
     * @param int $days Количество дней для приближения / Number of days to advance
     */
    public function advance(int $days): void
    {
        $this->date->modify("-$days days");
    }

    /**
     * Возвращает количество дней до события.
     *
     * Returns the number of days until the event.
     *
     * @return int Количество дней до события / Number of days until the event
     */
    public function daysUntil(): int
    {
        $now = new DateTime();
        $interval = $now->diff($this->date);
        return (int)$interval->format('%a');
    }

    /**
     * Возвращает описание события, включающее название и дату.
     *
     * Returns a description of the event, including the title and date.
     *
     * @return string Описание события / Event description
     */
    public function getDescription(): string
    {
        return "{$this->title} - {$this->getDate()}";
    }
}