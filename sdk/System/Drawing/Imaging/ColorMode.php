<?php
namespace System\Drawing\Imaging;
/**
 */
enum ColorMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Argb32Mode = 0;
	case Argb64Mode = 1;
}
