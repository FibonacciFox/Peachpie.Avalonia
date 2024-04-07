<?php

namespace Peachpie\Avalonia
{
    use Avalonia\Application;
    use Peachpie\Avalonia\Traits\EventTrait;
    use Peachpie\Avalonia\Traits\GetControlTrait;
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
        use EventTrait;
        use GetControlTrait;
	}
}