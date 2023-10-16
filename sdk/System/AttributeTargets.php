<?php
namespace System;
/**
 */
enum AttributeTargets implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Assembly = 1;
	case Module = 2;
	case Class = 4;
	case Struct = 8;
	case Enum = 16;
	case Constructor = 32;
	case Method = 64;
	case Property = 128;
	case Field = 256;
	case Event = 512;
	case Interface = 1024;
	case Parameter = 2048;
	case Delegate = 4096;
	case ReturnValue = 8192;
	case GenericParameter = 16384;
	case All = 32767;
}
