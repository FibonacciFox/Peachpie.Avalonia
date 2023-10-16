<?php
namespace System\Security\Principal;
/**
 */
enum WinSecurityContext implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Thread = 1;
	case Process = 2;
	case Both = 3;
}
