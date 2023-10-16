<?php
namespace System\Runtime\InteropServices\Marshalling;
/**
 */
enum MarshalMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case ManagedToUnmanagedIn = 1;
	case ManagedToUnmanagedRef = 2;
	case ManagedToUnmanagedOut = 3;
	case UnmanagedToManagedIn = 4;
	case UnmanagedToManagedRef = 5;
	case UnmanagedToManagedOut = 6;
	case ElementIn = 7;
	case ElementRef = 8;
	case ElementOut = 9;
}
