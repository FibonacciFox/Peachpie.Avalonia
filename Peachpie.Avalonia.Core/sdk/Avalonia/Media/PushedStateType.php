<?php
namespace Avalonia\Media;
/**
 */
enum PushedStateType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Transform = 1;
	case Opacity = 2;
	case Clip = 3;
	case GeometryClip = 4;
	case OpacityMask = 5;
	case Matrix = 0;
	case MatrixContainer = 1;
}
