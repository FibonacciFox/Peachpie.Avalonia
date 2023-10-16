<?php
namespace System\Security\Principal;
/**
 */
enum TokenAccessLevels implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AssignPrimary = 1;
	case Duplicate = 2;
	case Impersonate = 4;
	case Query = 8;
	case QuerySource = 16;
	case AdjustPrivileges = 32;
	case AdjustGroups = 64;
	case AdjustDefault = 128;
	case AdjustSessionId = 256;
	case Read = 131080;
	case Write = 131296;
	case AllAccess = 983551;
	case MaximumAllowed = 33554432;
}
