<?php
namespace System\Security\Claims;
/**
 */
enum SerializationMask implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case HasIdentities = 1;
	case UserData = 2;
}
