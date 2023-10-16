<?php
namespace System\Reflection;
/**
 */
enum BindingFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case IgnoreCase = 1;
	case DeclaredOnly = 2;
	case Instance = 4;
	case Static = 8;
	case Public = 16;
	case NonPublic = 32;
	case FlattenHierarchy = 64;
	case InvokeMethod = 256;
	case CreateInstance = 512;
	case GetField = 1024;
	case SetField = 2048;
	case GetProperty = 4096;
	case SetProperty = 8192;
	case PutDispProperty = 16384;
	case PutRefDispProperty = 32768;
	case ExactBinding = 65536;
	case SuppressChangeType = 131072;
	case OptionalParamBinding = 262144;
	case IgnoreReturn = 16777216;
	case DoNotWrapExceptions = 33554432;
}
