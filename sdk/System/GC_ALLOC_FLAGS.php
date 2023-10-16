<?php
namespace System;
/**
 */
enum GC_ALLOC_FLAGS implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case GC_ALLOC_NO_FLAGS = 0;
	case GC_ALLOC_ZEROING_OPTIONAL = 16;
	case GC_ALLOC_PINNED_OBJECT_HEAP = 64;
}
