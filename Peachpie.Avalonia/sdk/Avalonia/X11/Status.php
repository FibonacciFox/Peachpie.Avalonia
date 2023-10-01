<?php
namespace Avalonia\X11;
/**
 */
enum Status implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Success = 0;
	case BadRequest = 1;
	case BadValue = 2;
	case BadWindow = 3;
	case BadPixmap = 4;
	case BadAtom = 5;
	case BadCursor = 6;
	case BadFont = 7;
	case BadMatch = 8;
	case BadDrawable = 9;
	case BadAccess = 10;
	case BadAlloc = 11;
	case BadColor = 12;
	case BadGC = 13;
	case BadIDChoice = 14;
	case BadName = 15;
	case BadLength = 16;
	case BadImplementation = 17;
	case FirstExtensionError = 128;
	case LastExtensionError = 255;
}
