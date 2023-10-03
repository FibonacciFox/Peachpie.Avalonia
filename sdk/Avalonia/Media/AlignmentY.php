<?php
namespace Avalonia\Media;
/**
 */
enum AlignmentY implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Top = 0;
	case Center = 1;
	case Bottom = 2;
}
