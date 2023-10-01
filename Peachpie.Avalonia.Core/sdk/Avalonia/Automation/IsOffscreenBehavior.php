<?php
namespace Avalonia\Automation;
/**
 */
enum IsOffscreenBehavior implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case Onscreen = 1;
	case Offscreen = 2;
	case FromClip = 3;
}
