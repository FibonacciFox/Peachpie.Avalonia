<?php

namespace Peachpie\Avalonia
{
    use Avalonia\Application;
    use Peachpie\Avalonia\Traits\EventsTrait;
    use Peachpie\Avalonia\Traits\GetComponentTrait;
	/**
	 * UxApplication short summary.
	 *
	 * UxApplication description.
	 *
	 * @version 1.0
	 * @author FibonacciFox
	 */
	class UxApplication extends Application
	{
        use EventsTrait;
        use GetComponentTrait;
	}
}