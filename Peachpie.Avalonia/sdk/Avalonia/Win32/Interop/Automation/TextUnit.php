<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum TextUnit implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Character = 0;
	case Format = 1;
	case Word = 2;
	case Line = 3;
	case Paragraph = 4;
	case Page = 5;
	case Document = 6;
}
