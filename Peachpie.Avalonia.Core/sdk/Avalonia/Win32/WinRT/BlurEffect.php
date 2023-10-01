<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum BlurEffect implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Acrylic = 1;
	case MicaLight = 2;
	case MicaDark = 3;
}
