<?php
namespace System\Security;
/**
 */
enum SecurityCriticalScope implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Explicit = 0;
	case Everything = 1;
}
