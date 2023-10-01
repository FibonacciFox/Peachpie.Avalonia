<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum DirectXAlphaMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unspecified = 0;
	case Premultiplied = 1;
	case Straight = 2;
	case Ignore = 3;
}
