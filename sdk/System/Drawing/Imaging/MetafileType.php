<?php
namespace System\Drawing\Imaging;
/**
 */
enum MetafileType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Invalid = 0;
	case Wmf = 1;
	case WmfPlaceable = 2;
	case Emf = 3;
	case EmfPlusOnly = 4;
	case EmfPlusDual = 5;
}
