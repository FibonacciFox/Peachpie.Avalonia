<?php
namespace System\Security\AccessControl;
/**
 */
enum ObjectAceFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case ObjectAceTypePresent = 1;
	case InheritedObjectAceTypePresent = 2;
}
