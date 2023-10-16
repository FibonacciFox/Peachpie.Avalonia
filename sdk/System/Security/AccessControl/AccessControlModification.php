<?php
namespace System\Security\AccessControl;
/**
 */
enum AccessControlModification implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Add = 0;
	case Set = 1;
	case Reset = 2;
	case Remove = 3;
	case RemoveAll = 4;
	case RemoveSpecific = 5;
}
