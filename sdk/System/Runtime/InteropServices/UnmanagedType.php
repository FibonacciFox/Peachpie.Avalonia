<?php
namespace System\Runtime\InteropServices;
/**
 */
enum UnmanagedType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Bool = 2;
	case I1 = 3;
	case U1 = 4;
	case I2 = 5;
	case U2 = 6;
	case I4 = 7;
	case U4 = 8;
	case I8 = 9;
	case U8 = 10;
	case R4 = 11;
	case R8 = 12;
	case Currency = 15;
	case BStr = 19;
	case LPStr = 20;
	case LPWStr = 21;
	case LPTStr = 22;
	case ByValTStr = 23;
	case IUnknown = 25;
	case IDispatch = 26;
	case Struct = 27;
	case Interface = 28;
	case SafeArray = 29;
	case ByValArray = 30;
	case SysInt = 31;
	case SysUInt = 32;
	case VBByRefStr = 34;
	case AnsiBStr = 35;
	case TBStr = 36;
	case VariantBool = 37;
	case FunctionPtr = 38;
	case AsAny = 40;
	case LPArray = 42;
	case LPStruct = 43;
	case CustomMarshaler = 44;
	case Error = 45;
	case IInspectable = 46;
	case HString = 47;
	case LPUTF8Str = 48;
}
