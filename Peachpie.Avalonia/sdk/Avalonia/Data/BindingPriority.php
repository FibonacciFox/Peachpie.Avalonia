<?php
namespace Avalonia\Data;
/**
 */
enum BindingPriority implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Animation = 0;
	case LocalValue = 1;
	case StyleTrigger = 2;
	case Template = 2;
	case Style = 3;
	case Inherited = 4;
	case Unset = 2147483647;
	case TemplatedParent = -1;
}
