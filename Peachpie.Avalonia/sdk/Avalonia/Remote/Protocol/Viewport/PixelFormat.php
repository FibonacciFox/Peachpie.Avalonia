<?php
namespace Avalonia\Remote\Protocol\Viewport;
/**
 */
enum PixelFormat implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Rgb565 = 0;
	case Rgba8888 = 1;
	case Bgra8888 = 2;
	case MaxValue = 2;
}
