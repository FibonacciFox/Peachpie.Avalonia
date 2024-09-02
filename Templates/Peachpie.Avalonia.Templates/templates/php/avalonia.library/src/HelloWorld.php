<?php

namespace PeachpieAvaloniaLibraryTemplate;

use Peachpie\Community\Output\Logger;

class HelloWorld
{
    public function SayHello(): void
    {
        Logger::Info("Hello Avalonia !");
    }
}