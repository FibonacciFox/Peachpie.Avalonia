<?php
namespace Avalonia\Controls;
/**
 */
enum FlyoutShowMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Standard = 0;
	case Transient = 1;
	case TransientWithDismissOnPointerMoveAway = 2;
}
