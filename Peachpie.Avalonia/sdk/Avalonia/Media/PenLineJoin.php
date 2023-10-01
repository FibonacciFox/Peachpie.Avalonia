<?php
namespace Avalonia\Media;
/**
 */
enum PenLineJoin implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Bevel = 0;
	case Miter = 1;
	case Round = 2;
}
