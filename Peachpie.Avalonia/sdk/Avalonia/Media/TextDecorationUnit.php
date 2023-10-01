<?php
namespace Avalonia\Media;
/**
 */
enum TextDecorationUnit implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case FontRecommended = 0;
	case FontRenderingEmSize = 1;
	case Pixel = 2;
}
