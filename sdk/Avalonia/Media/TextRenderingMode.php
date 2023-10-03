<?php
namespace Avalonia\Media;
/**
 */
enum TextRenderingMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unspecified = 0;
	case SubpixelAntialias = 1;
	case Antialias = 2;
	case Alias = 3;
}
