<?php

namespace Peachpie\Avalonia\Traits;
use Peachpie\Avalonia\Core\GetComponentTraitExtension;

trait GetComponentTrait
{

    /**
     * @param string $name
     * @return mixed
     */
    public function FindByName(string $name): mixed
    {
        return GetComponentTraitExtension::FindByName($this, $name);
    }

}