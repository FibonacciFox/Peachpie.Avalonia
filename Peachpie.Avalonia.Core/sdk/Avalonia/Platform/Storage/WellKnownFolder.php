<?php
namespace Avalonia\Platform\Storage;
/**
 */
enum WellKnownFolder implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Desktop = 0;
	case Documents = 1;
	case Downloads = 2;
	case Music = 3;
	case Pictures = 4;
	case Videos = 5;
}
