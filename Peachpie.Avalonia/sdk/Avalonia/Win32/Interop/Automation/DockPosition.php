<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum DockPosition implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Top = 0;
	case Left = 1;
	case Bottom = 2;
	case Right = 3;
	case Fill = 4;
	case None = 5;
}
