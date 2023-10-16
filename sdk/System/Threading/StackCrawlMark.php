<?php
namespace System\Threading;
/**
 */
enum StackCrawlMark implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LookForMe = 0;
	case LookForMyCaller = 1;
	case LookForMyCallersCaller = 2;
	case LookForThread = 3;
}
