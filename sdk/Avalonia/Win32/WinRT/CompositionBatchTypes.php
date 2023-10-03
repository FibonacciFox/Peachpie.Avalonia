<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum CompositionBatchTypes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Animation = 1;
	case Effect = 2;
	case InfiniteAnimation = 4;
	case AllAnimations = 5;
}
