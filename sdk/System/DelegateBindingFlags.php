<?php
namespace System;
/**
 */
enum DelegateBindingFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case StaticMethodOnly = 1;
	case InstanceMethodOnly = 2;
	case OpenDelegateOnly = 4;
	case ClosedDelegateOnly = 8;
	case NeverCloseOverNull = 16;
	case CaselessMatching = 32;
	case RelaxedSignature = 64;
}
