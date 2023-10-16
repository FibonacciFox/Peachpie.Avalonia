<?php
namespace System\Runtime\InteropServices;
/**
 */
enum GCHandleType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Weak = 0;
	case WeakTrackResurrection = 1;
	case Normal = 2;
	case Pinned = 3;
}
