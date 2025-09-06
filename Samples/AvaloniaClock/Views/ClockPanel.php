<?php

namespace Views;

use Avalonia\Controls\UserControl;
use Avalonia\Media\Brushes;
use Avalonia\Media\Pen;
use Avalonia\Media\PenLineCap;
use Avalonia\Media\Brush;
use Avalonia\Point;
use DateTimeImmutable;
use Peachpie\Community\Threading\Timer;


/**
 * Красивые аналоговые часы для PeachPie + Avalonia.
 * Фишки:
 *  - Гладкая секундная стрелка (миллисекунды)
 *  - Минутная/часовая стрелки с учётом дробной части
 *  - Циферблат с минутными и часовыми делениями
 *  - Центральная втулка и аккуратные скруглённые концы стрелок
 */
class ClockPanel extends UserControl
{
    function __construct()
    {
        $intervalTimer = Timer::every('16', function() {

            uiLater(function(){
                $this->InvalidateVisual();
            });
        });
    }

    public function Render($context): void
    {
        parent::Render($context);

        $w = $this->Bounds->Width;
        $h = $this->Bounds->Height;
        $margin = 16; // внешний отступ

        // Геометрия
        $cx = $w / 2.0;
        $cy = $h / 2.0;
        $radiusX = ($w / 2.0) - $margin;
        $radiusY = ($h / 2.0) - $margin;
        $center = new Point($cx, $cy);

        // Фон внутри циферблата
        $dialBrush = Brush::Parse("#003049");
        $context->DrawEllipse($dialBrush, null, $center, $radiusX, $radiusY);

        // Дата/время с дробной частью
        $now = new DateTimeImmutable();
        $hours   = (int)$now->format('G');
        $minutes = (int)$now->format('i');
        $seconds = (int)$now->format('s');
        $millis  = (int)$now->format('v');

        $second = $seconds + $millis / 1000.0;                  // 0..60
        $minute = $minutes + $second / 60.0;                    // 0..60
        $hour   = ($hours % 12) + $minute / 60.0;               // 0..12

        // Обод и внутренняя подложка циферблата
        $ringPenOuter = new Pen(Brushes::$DimGray, 4);
        $ringPenInner = new Pen(Brushes::$Gray, 1);
        $context->DrawEllipse(null, $ringPenOuter, $center, $radiusX, $radiusY);
        $context->DrawEllipse(null, $ringPenInner, $center, $radiusX - 6, $radiusY - 6);

        // Деления: минутные и часовые
        $minutePen = new Pen(Brushes::$DarkGray, 1);
        $hourPen   = new Pen(Brushes::$White, 2);
        $minutePen->LineCap = PenLineCap::Round;
        $hourPen->LineCap = PenLineCap::Round;

        for ($i = 0; $i < 60; $i++) {
            $isHour = ($i % 5) === 0;
            $len = $isHour ? 14 : 7; // длина штриха
            $pen = $isHour ? $hourPen : $minutePen;

            $angle = $i * 6.0; // градусов
            $outer = $this->polar($cx, $cy, $radiusX, $radiusY, $angle);
            $inner = $this->polar($cx, $cy, $radiusX - $len, $radiusY - $len, $angle);

            $context->DrawLine($pen, $inner, $outer);
        }

        // Стрелки
        $hourPenDraw   = new Pen(Brushes::$White, 6);
        $minutePenDraw = new Pen(Brushes::$White, 4);
        $secondPenDraw = new Pen(Brushes::$Red,   1.5);
        $hourPenDraw->LineCap = PenLineCap::Round;
        $minutePenDraw->LineCap = PenLineCap::Round;
        $secondPenDraw->LineCap = PenLineCap::Round;

        // Углы в градусах: 0° — вверх, поэтому смещаем на -90°
        $hourAngle   = ($hour   * 30.0);   // 360 / 12
        $minuteAngle = ($minute * 6.0);    // 360 / 60
        $secondAngle = ($second * 6.0);

        $hourPt   = $this->polar($cx, $cy, $radiusX * 0.55, $radiusY * 0.55, $hourAngle);
        $minutePt = $this->polar($cx, $cy, $radiusX * 0.78, $radiusY * 0.78, $minuteAngle);
        $secondPt = $this->polar($cx, $cy, $radiusX * 0.86, $radiusY * 0.86, $secondAngle);

        // Хвост секунданта для красоты
        $secondTail = $this->polar($cx, $cy, $radiusX * -0.15, $radiusY * -0.15, $secondAngle);

        $context->DrawLine($hourPenDraw,   $center, $hourPt);
        $context->DrawLine($minutePenDraw, $center, $minutePt);
        $context->DrawLine($secondPenDraw, $secondTail, $secondPt);

        // Центральная втулка
        $context->DrawEllipse(Brushes::$Red, null, $center, 5, 5);
        $context->DrawEllipse(null, new Pen(Brushes::$White, 1), $center, 7, 7);
    }

    /**
     * Полярные координаты -> Point в эллиптической системе (учёт разного W/H)
     */
    private function polar(float $cx, float $cy, float $rx, float $ry, float $deg): Point
    {
        $rad = deg2rad($deg - 90.0); // 0° вверх как у часов
        $x = $cx + $rx * cos($rad);
        $y = $cy + $ry * sin($rad);
        return new Point($x, $y);
    }
}
