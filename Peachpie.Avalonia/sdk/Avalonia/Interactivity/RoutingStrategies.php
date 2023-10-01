<?php
namespace Avalonia\Interactivity;
/**
 */
enum RoutingStrategies implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Direct = 1;
	case Tunnel = 2;
	case Bubble = 4;
}
