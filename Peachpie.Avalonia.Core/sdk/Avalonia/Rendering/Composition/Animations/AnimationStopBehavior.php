<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
enum AnimationStopBehavior implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LeaveCurrentValue = 0;
	case SetToInitialValue = 1;
	case SetToFinalValue = 2;
}
