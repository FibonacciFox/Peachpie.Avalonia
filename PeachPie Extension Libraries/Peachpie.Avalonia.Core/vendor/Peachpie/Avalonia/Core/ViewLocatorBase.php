<?php

use Avalonia\Controls\Templates\IDataTemplate;
use Peachpie\Community\Reactive\ReactiveObject;

class ViewLocatorBase implements IDataTemplate
{
    public function Match(object $data): bool
    {
        return $data instanceof ReactiveObject;
    }
}