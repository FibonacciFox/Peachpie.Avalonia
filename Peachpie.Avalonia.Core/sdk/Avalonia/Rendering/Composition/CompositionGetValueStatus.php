<?php
namespace Avalonia\Rendering\Composition;
/**
 */
enum CompositionGetValueStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Succeeded = 0;
	case TypeMismatch = 1;
	case NotFound = 2;
}
