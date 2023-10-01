<?php
namespace Avalonia\Data;
/**
 */
enum BindingValueType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case UnsetValue = 0;
	case DoNothing = 1;
	case Value = 255;
	case BindingError = 256;
	case DataValidationError = 258;
	case BindingErrorWithFallback = 512;
	case DataValidationErrorWithFallback = 515;
	case TypeMask = 516;
	case HasValue = 771;
	case HasError = 772;
}
