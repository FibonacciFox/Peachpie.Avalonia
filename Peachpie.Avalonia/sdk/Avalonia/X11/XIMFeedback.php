<?php
namespace Avalonia\X11;
/**
 */
enum XIMFeedback implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Reverse = 1;
	case Underline = 2;
	case Highlight = 4;
	case Primary = 32;
	case Secondary = 64;
	case Tertiary = 128;
}
