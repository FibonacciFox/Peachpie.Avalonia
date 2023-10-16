<?php
namespace System\Security\AccessControl;
/**
 */
enum AuditFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Success = 1;
	case Failure = 2;
}
