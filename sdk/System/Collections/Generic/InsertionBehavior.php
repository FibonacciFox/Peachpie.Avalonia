<?php
namespace System\Collections\Generic;
/**
 */
enum InsertionBehavior implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case OverwriteExisting = 1;
	case ThrowOnExisting = 2;
}
