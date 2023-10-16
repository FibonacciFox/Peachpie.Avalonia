<?php
namespace System\Drawing\Text;
/**
 */
enum TextRenderingHint implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SystemDefault = 0;
	case SingleBitPerPixelGridFit = 1;
	case SingleBitPerPixel = 2;
	case AntiAliasGridFit = 3;
	case AntiAlias = 4;
	case ClearTypeGridFit = 5;
}
