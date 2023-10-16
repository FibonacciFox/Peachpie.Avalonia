<?php
namespace System;
/**
 */
enum LoaderOptimization implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DisallowBindings = 0;
	case DomainMask = 1;
	case MultiDomain = 2;
	case MultiDomainHost = 3;
	case NotSpecified = 3;
	case SingleDomain = 4;
}
