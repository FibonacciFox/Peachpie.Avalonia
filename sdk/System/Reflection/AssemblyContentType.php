<?php
namespace System\Reflection;
/**
 */
enum AssemblyContentType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case WindowsRuntime = 1;
}
