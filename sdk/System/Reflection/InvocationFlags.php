<?php
namespace System\Reflection;
/**
 */
enum InvocationFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unknown = 0;
	case Initialized = 1;
	case NoInvoke = 2;
	case RunClassConstructor = 4;
	case NoConstructorInvoke = 8;
	case IsConstructor = 16;
	case IsDelegateConstructor = 16;
	case ContainsStackPointers = 32;
	case SpecialField = 128;
	case FieldSpecialCast = 256;
}
