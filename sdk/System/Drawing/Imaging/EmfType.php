<?php
namespace System\Drawing\Imaging;
/**
 */
enum EmfType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case EmfOnly = 3;
	case EmfPlusOnly = 4;
	case EmfPlusDual = 5;
}
