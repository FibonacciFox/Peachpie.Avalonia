<?php
namespace System\Drawing\Imaging;
/**
 */
enum PixelFormat implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DontCare = 0;
	case Undefined = 0;
	case Max = 15;
	case Indexed = 65536;
	case Gdi = 131072;
	case Format16bppRgb555 = 135173;
	case Format16bppRgb565 = 135174;
	case Format24bppRgb = 137224;
	case Format32bppRgb = 139273;
	case Format1bppIndexed = 196865;
	case Format4bppIndexed = 197634;
	case Format8bppIndexed = 198659;
	case Alpha = 262144;
	case Format16bppArgb1555 = 397319;
	case PAlpha = 524288;
	case Format32bppPArgb = 925707;
	case Extended = 1048576;
	case Format16bppGrayScale = 1052676;
	case Format48bppRgb = 1060876;
	case Format64bppPArgb = 1851406;
	case Canonical = 2097152;
	case Format32bppArgb = 2498570;
	case Format64bppArgb = 3424269;
}
