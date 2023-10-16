<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum CoordinateSpace implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case World = 0;
	case Page = 1;
	case Device = 2;
}
