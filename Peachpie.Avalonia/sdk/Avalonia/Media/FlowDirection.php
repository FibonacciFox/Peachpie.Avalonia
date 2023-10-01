<?php
namespace Avalonia\Media;
/**
 */
enum FlowDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LeftToRight = 0;
	case RightToLeft = 1;
}
