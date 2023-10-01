<?php
namespace Avalonia\Media;
/**
 */
enum FontWeight implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Thin = 100;
	case ExtraLight = 200;
	case UltraLight = 200;
	case Light = 300;
	case SemiLight = 350;
	case Normal = 400;
	case Regular = 400;
	case Medium = 500;
	case DemiBold = 600;
	case SemiBold = 600;
	case Bold = 700;
	case ExtraBold = 800;
	case UltraBold = 800;
	case Black = 900;
	case Heavy = 900;
	case ExtraBlack = 950;
	case UltraBlack = 950;
}
