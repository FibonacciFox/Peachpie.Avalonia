<?php
namespace Avalonia\X11;
/**
 */
enum MouseKeyMasks implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Button1Mask = 256;
	case Button2Mask = 512;
	case Button3Mask = 1024;
	case Button4Mask = 2048;
	case Button5Mask = 4096;
}
