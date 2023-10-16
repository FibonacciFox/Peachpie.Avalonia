<?php
namespace System\Security\Principal;
/**
 */
enum IdentifierAuthority implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NullAuthority = 0;
	case WorldAuthority = 1;
	case LocalAuthority = 2;
	case CreatorAuthority = 3;
	case NonUniqueAuthority = 4;
	case NTAuthority = 5;
	case SiteServerAuthority = 6;
	case InternetSiteAuthority = 7;
	case ExchangeAuthority = 8;
	case ResourceManagerAuthority = 9;
}
