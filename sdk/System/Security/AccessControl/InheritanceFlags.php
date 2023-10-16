<?php
namespace System\Security\AccessControl;
/**
 */
enum InheritanceFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case ContainerInherit = 1;
	case ObjectInherit = 2;
}
