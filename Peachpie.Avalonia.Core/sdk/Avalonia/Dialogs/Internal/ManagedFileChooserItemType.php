<?php
namespace Avalonia\Dialogs\Internal;
/**
 */
enum ManagedFileChooserItemType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case File = 0;
	case Folder = 1;
	case Volume = 2;
}
