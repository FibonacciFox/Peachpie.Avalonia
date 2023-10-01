<?php
namespace Avalonia\Win32;
/**
 */
enum PlatformApi implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DirectX9 = 0;
	case DirectX11 = 1;
}
