<?php
namespace System\Security;
/**
 */
enum PartialTrustVisibilityLevel implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case VisibleToAllHosts = 0;
	case NotVisibleByDefault = 1;
}
