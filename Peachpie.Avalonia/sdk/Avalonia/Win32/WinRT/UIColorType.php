<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum UIColorType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Background = 0;
	case Foreground = 1;
	case AccentDark3 = 2;
	case AccentDark2 = 3;
	case AccentDark1 = 4;
	case Accent = 5;
	case AccentLight1 = 6;
	case AccentLight2 = 7;
	case AccentLight3 = 8;
	case Complement = 9;
}
