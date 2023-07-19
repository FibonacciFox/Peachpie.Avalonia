<?php

namespace Peachpie;

class EvalScript
{
    /**
     * @param string $script
     * @return mixed
     */
    public static function Run(string $script) {
        return Eval($script);
    }
}