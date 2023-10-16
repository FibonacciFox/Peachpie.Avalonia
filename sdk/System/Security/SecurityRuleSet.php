<?php
namespace System\Security;
/**
 */
enum SecurityRuleSet implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Level1 = 1;
	case Level2 = 2;
}
