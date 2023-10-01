<?php
namespace Avalonia\X11;
/**
 */
enum XLookupStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case XBufferOverflow = 1;
	case XLookupNone = 2;
	case XLookupChars = 3;
	case XLookupKeySym = 4;
	case XLookupBoth = 4294967295;
}
