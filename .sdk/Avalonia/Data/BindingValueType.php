<?php
namespace Avalonia\Data;
enum BindingValueType
{
	
	case UnsetValue = '0';
	case DoNothing = '1';
	case Value = '258';
	case BindingError = '515';
	case DataValidationError = '516';
	case BindingErrorWithFallback = '771';
	case DataValidationErrorWithFallback = '772';
	case TypeMask = '255';
	case HasValue = '256';
	case HasError = '512';

}