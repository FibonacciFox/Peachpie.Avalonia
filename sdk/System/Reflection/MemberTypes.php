<?php
namespace System\Reflection;
/**
 */
enum MemberTypes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Constructor = 1;
	case Event = 2;
	case Field = 4;
	case Method = 8;
	case Property = 16;
	case TypeInfo = 32;
	case Custom = 64;
	case NestedType = 128;
	case All = 191;
}
