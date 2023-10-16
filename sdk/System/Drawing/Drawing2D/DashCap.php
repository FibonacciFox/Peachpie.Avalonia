<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum DashCap implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Flat = 0;
	case Round = 2;
	case Triangle = 3;
}
