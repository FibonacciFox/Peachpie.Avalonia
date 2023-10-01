<?php
namespace Avalonia\Threading;
/**
 */
enum DispatcherOperationStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Pending = 0;
	case Aborted = 1;
	case Completed = 2;
	case Executing = 3;
}
