<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum FillMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Alternate = 0;
	case Winding = 1;
}
