<?php
namespace Avalonia\Controls;
/**
 */
enum LayoutTimeSizeType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Pixel = 1;
	case Auto = 2;
	case Star = 4;
}
