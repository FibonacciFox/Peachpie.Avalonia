<?php
namespace System\Linq;
/**
 */
enum ExceptionArgument implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case collectionSelector = 0;
	case count = 1;
	case elementSelector = 2;
	case enumerable = 3;
	case first = 4;
	case func = 5;
	case index = 6;
	case inner = 7;
	case innerKeySelector = 8;
	case keySelector = 9;
	case outer = 10;
	case outerKeySelector = 11;
	case predicate = 12;
	case resultSelector = 13;
	case second = 14;
	case selector = 15;
	case source = 16;
	case third = 17;
	case size = 18;
}
