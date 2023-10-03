<?php
namespace Avalonia\X11;
/**
 */
enum XIMCaretDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case XIMForwardChar = 0;
	case XIMBackwardChar = 1;
	case XIMForwardWord = 2;
	case XIMBackwardWord = 3;
	case XIMCaretUp = 4;
	case XIMCaretDown = 5;
	case XIMNextLine = 6;
	case XIMPreviousLine = 7;
	case XIMLineStart = 8;
	case XIMLineEnd = 9;
	case XIMAbsolutePosition = 10;
	case XIMDontChange = 11;
}
