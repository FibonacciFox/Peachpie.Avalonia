<?php
namespace System\Runtime\InteropServices;
/**
 */
enum VarEnum implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case VT_EMPTY = 0;
	case VT_NULL = 1;
	case VT_I2 = 2;
	case VT_I4 = 3;
	case VT_R4 = 4;
	case VT_R8 = 5;
	case VT_CY = 6;
	case VT_DATE = 7;
	case VT_BSTR = 8;
	case VT_DISPATCH = 9;
	case VT_ERROR = 10;
	case VT_BOOL = 11;
	case VT_VARIANT = 12;
	case VT_UNKNOWN = 13;
	case VT_DECIMAL = 14;
	case VT_I1 = 16;
	case VT_UI1 = 17;
	case VT_UI2 = 18;
	case VT_UI4 = 19;
	case VT_I8 = 20;
	case VT_UI8 = 21;
	case VT_INT = 22;
	case VT_UINT = 23;
	case VT_VOID = 24;
	case VT_HRESULT = 25;
	case VT_PTR = 26;
	case VT_SAFEARRAY = 27;
	case VT_CARRAY = 28;
	case VT_USERDEFINED = 29;
	case VT_LPSTR = 30;
	case VT_LPWSTR = 31;
	case VT_RECORD = 36;
	case VT_FILETIME = 64;
	case VT_BLOB = 65;
	case VT_STREAM = 66;
	case VT_STORAGE = 67;
	case VT_STREAMED_OBJECT = 68;
	case VT_STORED_OBJECT = 69;
	case VT_BLOB_OBJECT = 70;
	case VT_CF = 71;
	case VT_CLSID = 72;
	case VT_VECTOR = 4096;
	case VT_ARRAY = 8192;
	case VT_BYREF = 16384;
}
