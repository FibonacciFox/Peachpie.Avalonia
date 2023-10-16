<?php
namespace System\Security\Principal;
/**
 */
enum PrincipalPolicy implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case UnauthenticatedPrincipal = 0;
	case NoPrincipal = 1;
	case WindowsPrincipal = 2;
}
