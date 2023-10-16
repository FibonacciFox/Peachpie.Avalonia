<?php
namespace System\Security\Principal;
/**
 */
enum TokenType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case TokenPrimary = 1;
	case TokenImpersonation = 2;
}
