<?php
namespace Avalonia\X11\NativeDialogs;
/**
 */
enum GtkFileChooserAction implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Open = 0;
	case Save = 1;
	case SelectFolder = 2;
}
