<?php
namespace System\Buffers\Text;
/**
 */
enum ComponentParseResult implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NoMoreData = 0;
	case Colon = 1;
	case Period = 2;
	case ParseFailure = 3;
}
