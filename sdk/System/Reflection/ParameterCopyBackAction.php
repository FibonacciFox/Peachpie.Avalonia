<?php
namespace System\Reflection;
/**
 */
enum ParameterCopyBackAction implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Copy = 1;
	case CopyNullable = 2;
}
