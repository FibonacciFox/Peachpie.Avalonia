<?php
namespace Avalonia\Logging;
/**
 */
enum LogEventLevel implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Verbose = 0;
	case Debug = 1;
	case Information = 2;
	case Warning = 3;
	case Error = 4;
	case Fatal = 5;
}
