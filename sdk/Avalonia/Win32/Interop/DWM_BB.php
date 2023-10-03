<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum DWM_BB implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Enable = 1;
	case BlurRegion = 2;
	case TransitionMaximized = 4;
}
