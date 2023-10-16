<?php
namespace System\Security\AccessControl;
/**
 */
enum SecurityInfos implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Owner = 1;
	case Group = 2;
	case DiscretionaryAcl = 4;
	case SystemAcl = 8;
}
