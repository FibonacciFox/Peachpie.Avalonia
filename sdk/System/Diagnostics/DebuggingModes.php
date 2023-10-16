<?php
namespace System\Diagnostics;
/**
 */
enum DebuggingModes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Default = 1;
	case DisableOptimizations = 2;
	case IgnoreSymbolStoreSequencePoints = 4;
	case EnableEditAndContinue = 256;
}
