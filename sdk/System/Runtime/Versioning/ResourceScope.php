<?php
namespace System\Runtime\Versioning;
/**
 */
enum ResourceScope implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Machine = 1;
	case Process = 2;
	case AppDomain = 4;
	case Library = 8;
	case Private = 16;
	case Assembly = 32;
}
