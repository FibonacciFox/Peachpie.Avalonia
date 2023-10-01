<?php
namespace Avalonia\Collections;
/**
 */
enum ResetBehavior implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Reset = 0;
	case Remove = 1;
}
