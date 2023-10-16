<?php
namespace System\Security\AccessControl;
/**
 */
enum AccessControlSections implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Audit = 1;
	case Access = 2;
	case Owner = 4;
	case Group = 8;
	case All = 15;
}
