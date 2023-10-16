<?php
namespace System\Diagnostics\Contracts;
/**
 */
enum ContractFailureKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Precondition = 0;
	case Postcondition = 1;
	case PostconditionOnException = 2;
	case Invariant = 3;
	case Assert = 4;
	case Assume = 5;
}
