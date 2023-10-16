<?php
namespace System\Security\AccessControl;
/**
 */
enum PropagationFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case NoPropagateInherit = 1;
	case InheritOnly = 2;
}
