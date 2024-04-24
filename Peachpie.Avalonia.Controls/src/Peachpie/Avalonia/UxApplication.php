<?php

namespace Peachpie\Avalonia
{

    use Avalonia\Application;
    use Avalonia\Controls\ApplicationLifetimes\IClassicDesktopStyleApplicationLifetime;
    use Avalonia\Controls\ApplicationLifetimes\ISingleViewApplicationLifetime;
    use Peachpie\Avalonia\Traits\EventTrait;

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

        public function IsClassicDesktopStyleApplicationLifetime() : bool
        {
            if($this->ApplicationLifetime instanceof IClassicDesktopStyleApplicationLifetime) {
                return true;
            }
            return false;
        }

        public function IsSingleViewApplicationLifetime() : bool
        {
            if($this->ApplicationLifetime instanceof ISingleViewApplicationLifetime) {
                return true;
            }
            return false;
        }
	}
}