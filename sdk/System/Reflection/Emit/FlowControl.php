<?php
namespace System\Reflection\Emit;
/**
 */
enum FlowControl implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Branch = 0;
	case Break = 1;
	case Call = 2;
	case Cond_Branch = 3;
	case Meta = 4;
	case Next = 5;
	case Phi = 6;
	case Return = 7;
	case Throw = 8;
}
