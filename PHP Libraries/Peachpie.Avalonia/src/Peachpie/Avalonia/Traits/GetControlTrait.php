<?php

namespace Peachpie\Avalonia\Traits;

use Avalonia\Controls\Control;
use Peachpie\Avalonia\Xaml\Xaml;
use RuntimeException;

trait GetControlTrait
{
    /**
     * @return Control|null
     */
    public function FindByName(string $name): ?Control
    {
        return $this->findByName($name);
    }

    public function findByName(string $name): ?Control
    {
        return Xaml::find($this, $name);
    }

    /**
     * @throws RuntimeException
     */
    public function requireByName(string $name): Control
    {
        return Xaml::require($this, $name);
    }

    /**
     * @param array<string, string>|null $map
     * @return static
     */
    public function bindNamedControls(?array $map = null): static
    {
        Xaml::bind($this, $map);
        return $this;
    }
}
