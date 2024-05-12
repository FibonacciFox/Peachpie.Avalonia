<?php

namespace Php\Reactive;

use System\ComponentModel\PropertyChangedEventArgs;
use System\ComponentModel\PropertyChangedEventHandler;

class ReactiveObject
{
    /**
     * @var PropertyChangedEventHandler
     */
    public PropertyChangedEventHandler $PropertyChanged;

    /**
     * @param string|null $propertyName
     * @return void
     */
    protected function onPropertyChanged(string $propertyName = null): void
    {
        $this->PropertyChanged->Invoke($this, new PropertyChangedEventArgs($propertyName));
    }
}