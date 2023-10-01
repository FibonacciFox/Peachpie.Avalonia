<?php
namespace Avalonia\Media;
/**
 */
enum Command implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case FillRule = 1;
	case Move = 2;
	case Line = 3;
	case HorizontalLine = 4;
	case VerticalLine = 5;
	case CubicBezierCurve = 6;
	case QuadraticBezierCurve = 7;
	case SmoothCubicBezierCurve = 8;
	case SmoothQuadraticBezierCurve = 9;
	case Arc = 10;
	case Close = 11;
}
