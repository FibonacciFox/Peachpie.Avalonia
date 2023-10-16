<?php
namespace System\Security\AccessControl;
/**
 */
enum AceQualifier implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AccessAllowed = 0;
	case AccessDenied = 1;
	case SystemAudit = 2;
	case SystemAlarm = 3;
}
