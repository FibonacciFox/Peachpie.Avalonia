<?php
namespace System\Threading\Tasks;
/**
 */
enum CausalityRelation implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AssignDelegate = 0;
	case Join = 1;
	case Choice = 2;
	case Cancel = 3;
	case Error = 4;
}
