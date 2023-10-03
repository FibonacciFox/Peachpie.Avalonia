<?php
namespace Avalonia\Media;
/**
 */
enum BaselineAlignment implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Top = 0;
	case Center = 1;
	case Bottom = 2;
	case Baseline = 3;
	case TextTop = 4;
	case TextBottom = 5;
	case Subscript = 6;
	case Superscript = 7;
}
