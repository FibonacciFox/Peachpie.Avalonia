<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
enum AnimationDelayBehavior implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SetInitialValueAfterDelay = 0;
	case SetInitialValueBeforeDelay = 1;
}
