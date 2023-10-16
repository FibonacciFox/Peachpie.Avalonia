<?php
namespace System\Drawing;
/**
 */
enum ContentAlignment implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case TopLeft = 1;
	case TopCenter = 2;
	case TopRight = 4;
	case MiddleLeft = 16;
	case MiddleCenter = 32;
	case MiddleRight = 64;
	case BottomLeft = 256;
	case BottomCenter = 512;
	case BottomRight = 1024;
}
