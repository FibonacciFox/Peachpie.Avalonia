<?php
namespace System\Reflection;
/**
 */
enum MdSigCallingConvention implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CallConvMask = 0;
	case Default = 1;
	case C = 2;
	case StdCall = 3;
	case ThisCall = 4;
	case FastCall = 5;
	case Vararg = 6;
	case Field = 7;
	case LocalSig = 8;
	case Property = 9;
	case Unmanaged = 10;
	case GenericInst = 15;
	case Generic = 16;
	case HasThis = 32;
	case ExplicitThis = 64;
}
