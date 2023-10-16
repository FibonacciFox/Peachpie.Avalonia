<?php
namespace System\Runtime\Loader;
/**
 */
enum InternalState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Alive = 0;
	case Unloading = 1;
}
