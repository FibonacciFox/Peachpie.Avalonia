<?php
namespace System\Security\AccessControl;
/**
 */
enum PM implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case F = 1;
	case CF = 1;
	case CO = 2;
	case GF = 4;
	case GO = 8;
	case Invalid = 16;
}
