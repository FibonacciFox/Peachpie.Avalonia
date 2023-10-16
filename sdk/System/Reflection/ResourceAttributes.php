<?php
namespace System\Reflection;
/**
 */
enum ResourceAttributes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Public = 1;
	case Private = 2;
}
