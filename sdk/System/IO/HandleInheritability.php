<?php
namespace System\IO;
/**
 */
enum HandleInheritability implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Inheritable = 1;
}
