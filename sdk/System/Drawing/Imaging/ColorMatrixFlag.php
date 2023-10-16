<?php
namespace System\Drawing\Imaging;
/**
 */
enum ColorMatrixFlag implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case SkipGrays = 1;
	case AltGrays = 2;
}
