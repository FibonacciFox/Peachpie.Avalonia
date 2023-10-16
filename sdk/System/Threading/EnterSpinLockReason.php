<?php
namespace System\Threading;
/**
 */
enum EnterSpinLockReason implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case EnterAnyRead = 0;
	case ExitAnyRead = 1;
	case EnterWrite = 2;
	case UpgradeToWrite = 3;
	case EnterRecursiveWrite = 4;
	case ExitAnyWrite = 5;
	case OperationMask = 7;
	case Wait = 8;
}
