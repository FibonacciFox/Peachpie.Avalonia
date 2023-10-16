<?php
namespace System\Security\Permissions;
/**
 */
enum SecurityAction implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Assert = 2;
	case Demand = 3;
	case Deny = 4;
	case InheritanceDemand = 5;
	case LinkDemand = 6;
	case PermitOnly = 7;
	case RequestMinimum = 8;
	case RequestOptional = 9;
	case RequestRefuse = 10;
}
