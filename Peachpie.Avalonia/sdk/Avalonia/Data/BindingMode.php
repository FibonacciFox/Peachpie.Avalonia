<?php
namespace Avalonia\Data;
/**
 */
enum BindingMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case OneWay = 1;
	case TwoWay = 2;
	case OneTime = 3;
	case OneWayToSource = 4;
}
