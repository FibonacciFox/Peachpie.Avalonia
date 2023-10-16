<?php
namespace System\Security\Principal;
/**
 */
enum WindowsAccountType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Normal = 0;
	case Guest = 1;
	case System = 2;
	case Anonymous = 3;
}
