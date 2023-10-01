<?php
namespace Avalonia\Data;
/**
 */
enum BindingErrorType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Error = 1;
	case DataValidationError = 2;
}
