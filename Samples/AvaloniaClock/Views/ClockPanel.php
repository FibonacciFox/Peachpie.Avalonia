<?php

namespace Views;

use DateTime;
use Avalonia\Media\Brushes;
use Avalonia\Media\Pen;
use Avalonia\Point;
use Avalonia\Rect;
use Avalonia\Media\DrawingContext;
use Avalonia\Controls\UserControl;


class ClockPanel extends UserControl
{
    public function Render(DrawingContext $context): void
    {
        parent::Render($context);

        $margin = 10;

        $now = new DateTime();
        $hour = $now->format('G') + $now->format('i') / 60.0;
        $minute = $now->format('i') + $now->format('s') / 60.0;
        $second = $now->format('s') + $now->format('v') / 1000.0;

        $context->FillRectangle(
            Brushes::$Black, new Rect(0, 0, $this->Bounds->Width, $this->Bounds->Height)
        );

        $center = new Point($this->Bounds->Width / 2, $this->Bounds->Height / 2);

        for ($i = 0; $i < 12; $i++) {
            $tick = new Point(
                $center->X + ($this->Bounds->Width / 2 - $margin) * sin($i * 2 * M_PI / 12),
                $center->Y - ($this->Bounds->Height / 2 - $margin) * cos($i * 2 * M_PI / 12)
            );

            $context->FillRectangle(
                Brushes::$White,
                new Rect($tick->X - 2, $tick->Y - 2, 4, 4)
            );

        }

        $hourHand = new Point(
            $center->X + ($this->Bounds->Width / 3 - $margin) * sin($hour * 2 * M_PI / 12),
            $center->Y - ($this->Bounds->Height / 3 - $margin) * cos($hour * 2 * M_PI / 12)
        );

        $minuteHand = new Point(
            $center->X + ($this->Bounds->Width / 2 - $margin) * sin($minute * 2 * M_PI / 60),
            $center->Y- ($this->Bounds->Height / 2 - $margin) * cos($minute * 2 * M_PI / 60)
        );

        $secondHand = new Point(
            $center->X + ($this->Bounds->Width / 2 - $margin) * sin($second * 2 * M_PI / 60),
            $center->Y - ($this->Bounds->Height / 2 - $margin) * cos($second * 2 * M_PI / 60)
        );

        $context->DrawLine(
            new Pen(Brushes::$White, 5),
            $center,
            $hourHand
        );

        $context->DrawLine(
            new Pen(Brushes::$White, 3),
            $center,
            $minuteHand
        );

        $context->DrawLine(
            new Pen(Brushes::$Red, 1),
            $center,
            $secondHand
        );
    }
}