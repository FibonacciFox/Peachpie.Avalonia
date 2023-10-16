<?php
namespace System\Reflection\Emit;
/**
 */
enum AssemblyBuilderAccess implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Run = 1;
	case RunAndCollect = 9;
}
