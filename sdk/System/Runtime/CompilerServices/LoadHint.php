<?php
namespace System\Runtime\CompilerServices;
/**
 */
enum LoadHint implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case Always = 1;
	case Sometimes = 2;
}
