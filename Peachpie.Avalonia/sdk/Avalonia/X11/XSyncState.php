<?php
namespace Avalonia\X11;
/**
 */
enum XSyncState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case WaitConfigure = 1;
	case WaitPaint = 2;
}
