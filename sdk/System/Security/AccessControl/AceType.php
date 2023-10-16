<?php
namespace System\Security\AccessControl;
/**
 */
enum AceType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AccessAllowed = 0;
	case AccessDenied = 1;
	case SystemAudit = 2;
	case SystemAlarm = 3;
	case AccessAllowedCompound = 4;
	case AccessAllowedObject = 5;
	case AccessDeniedObject = 6;
	case SystemAuditObject = 7;
	case SystemAlarmObject = 8;
	case AccessAllowedCallback = 9;
	case AccessDeniedCallback = 10;
	case AccessAllowedCallbackObject = 11;
	case AccessDeniedCallbackObject = 12;
	case SystemAuditCallback = 13;
	case SystemAlarmCallback = 14;
	case SystemAuditCallbackObject = 15;
	case SystemAlarmCallbackObject = 16;
	case MaxDefinedAceType = 16;
}
