<?php
namespace Avalonia\Styling;
/**
 */
enum State implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Inactive;
	case Active;
	case Disposed;
}
