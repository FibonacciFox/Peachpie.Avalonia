<?php
namespace System\Threading;
/**
 */
enum LazyThreadSafetyMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case PublicationOnly = 1;
	case ExecutionAndPublication = 2;
}
