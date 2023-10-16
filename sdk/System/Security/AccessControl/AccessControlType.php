<?php
namespace System\Security\AccessControl;
/**
 */
enum AccessControlType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Allow = 0;
	case Deny = 1;
}
