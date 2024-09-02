<?php
namespace System\Diagnostics\Contracts;
enum ContractFailureKind
{
	
	case Precondition = '0';
	case Postcondition = '1';
	case PostconditionOnException = '2';
	case Invariant = '3';
	case Assert = '4';
	case Assume = '5';

}