<?php
namespace System\ComponentModel;
/**
 */
enum EditorBrowsableState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Always = 0;
	case Never = 1;
	case Advanced = 2;
}
