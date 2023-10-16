<?php
namespace System\Security\Principal;
/**
 */
enum SidNameUse implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case User = 1;
	case Group = 2;
	case Domain = 3;
	case Alias = 4;
	case WellKnownGroup = 5;
	case DeletedAccount = 6;
	case Invalid = 7;
	case Unknown = 8;
	case Computer = 9;
}
