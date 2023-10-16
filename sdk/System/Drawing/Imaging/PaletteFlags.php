<?php
namespace System\Drawing\Imaging;
/**
 */
enum PaletteFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case HasAlpha = 1;
	case GrayScale = 2;
	case Halftone = 4;
}
