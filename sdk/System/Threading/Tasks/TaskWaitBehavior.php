<?php
namespace System\Threading\Tasks;
/**
 */
enum TaskWaitBehavior implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Synchronous = 1;
	case Asynchronous = 2;
}
