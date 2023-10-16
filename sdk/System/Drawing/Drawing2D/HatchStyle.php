<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum HatchStyle implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Horizontal = 0;
	case Min = 0;
	case Vertical = 1;
	case ForwardDiagonal = 2;
	case BackwardDiagonal = 3;
	case Cross = 4;
	case LargeGrid = 4;
	case Max = 4;
	case DiagonalCross = 5;
	case Percent05 = 6;
	case Percent10 = 7;
	case Percent20 = 8;
	case Percent25 = 9;
	case Percent30 = 10;
	case Percent40 = 11;
	case Percent50 = 12;
	case Percent60 = 13;
	case Percent70 = 14;
	case Percent75 = 15;
	case Percent80 = 16;
	case Percent90 = 17;
	case LightDownwardDiagonal = 18;
	case LightUpwardDiagonal = 19;
	case DarkDownwardDiagonal = 20;
	case DarkUpwardDiagonal = 21;
	case WideDownwardDiagonal = 22;
	case WideUpwardDiagonal = 23;
	case LightVertical = 24;
	case LightHorizontal = 25;
	case NarrowVertical = 26;
	case NarrowHorizontal = 27;
	case DarkVertical = 28;
	case DarkHorizontal = 29;
	case DashedDownwardDiagonal = 30;
	case DashedUpwardDiagonal = 31;
	case DashedHorizontal = 32;
	case DashedVertical = 33;
	case SmallConfetti = 34;
	case LargeConfetti = 35;
	case ZigZag = 36;
	case Wave = 37;
	case DiagonalBrick = 38;
	case HorizontalBrick = 39;
	case Weave = 40;
	case Plaid = 41;
	case Divot = 42;
	case DottedGrid = 43;
	case DottedDiamond = 44;
	case Shingle = 45;
	case Trellis = 46;
	case Sphere = 47;
	case SmallGrid = 48;
	case SmallCheckerBoard = 49;
	case LargeCheckerBoard = 50;
	case OutlinedDiamond = 51;
	case SolidDiamond = 52;
}
