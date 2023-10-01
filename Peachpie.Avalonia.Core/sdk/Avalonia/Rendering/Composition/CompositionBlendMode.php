<?php
namespace Avalonia\Rendering\Composition;
/**
 */
enum CompositionBlendMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Clear = 0;
	case Src = 1;
	case Dst = 2;
	case SrcOver = 3;
	case DstOver = 4;
	case SrcIn = 5;
	case DstIn = 6;
	case SrcOut = 7;
	case DstOut = 8;
	case SrcATop = 9;
	case DstATop = 10;
	case Xor = 11;
	case Plus = 12;
	case Modulate = 13;
	case Screen = 14;
	case Overlay = 15;
	case Darken = 16;
	case Lighten = 17;
	case ColorDodge = 18;
	case ColorBurn = 19;
	case HardLight = 20;
	case SoftLight = 21;
	case Difference = 22;
	case Exclusion = 23;
	case Multiply = 24;
	case Hue = 25;
	case Saturation = 26;
	case Color = 27;
	case Luminosity = 28;
}
