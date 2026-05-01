<?php

namespace Peachpie\Avalonia\Mvvm;

use Peachpie\Community\Reactive\ReactiveObject;

class ViewModel extends ReactiveObject
{
    protected function notify(string $propertyName = null): void
    {
        $this->onPropertyChanged($propertyName);
    }

    protected function raisePropertyChanged(string $propertyName = null): void
    {
        $this->onPropertyChanged($propertyName);
    }

    protected function setProperty(mixed &$field, mixed $value, string $propertyName = null): bool
    {
        if ($field === $value) {
            return false;
        }

        $field = $value;
        $this->onPropertyChanged($propertyName);
        return true;
    }
}
