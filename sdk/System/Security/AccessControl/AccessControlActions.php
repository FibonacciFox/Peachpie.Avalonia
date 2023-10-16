<?php
namespace System\Security\AccessControl;
/**
 */
enum AccessControlActions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case View = 1;
	case Change = 2;
}
