<?php
namespace System\Security\AccessControl;
/**
 */
enum AceFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case ObjectInherit = 1;
	case ContainerInherit = 2;
	case NoPropagateInherit = 4;
	case InheritOnly = 8;
	case Inherited = 15;
	case SuccessfulAccess = 16;
	case FailedAccess = 64;
	case InheritanceFlags = 128;
	case AuditFlags = 192;
}
