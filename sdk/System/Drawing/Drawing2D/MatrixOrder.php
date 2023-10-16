<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum MatrixOrder implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Prepend = 0;
	case Append = 1;
}
