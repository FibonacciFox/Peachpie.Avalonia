<?php
namespace System\Reflection;
/**
 */
enum NotAnnotatedStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Private = 1;
	case Internal = 2;
}
