<?php
namespace System\Security\AccessControl;
/**
 */
enum CompoundAceType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Impersonation = 1;
}
