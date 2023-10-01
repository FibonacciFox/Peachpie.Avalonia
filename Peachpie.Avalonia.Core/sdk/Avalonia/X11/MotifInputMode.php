<?php
namespace Avalonia\X11;
/**
 */
enum MotifInputMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Modeless = 0;
	case ApplicationModal = 1;
	case SystemModal = 2;
	case FullApplicationModal = 3;
}
