<?php
namespace System\Security\Permissions;
/**
 */
enum PermissionState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Unrestricted = 1;
}
