<?php
namespace System\Resources;
/**
 */
enum UltimateResourceFallbackLocation implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case MainAssembly = 0;
	case Satellite = 1;
}
