<?php
namespace Avalonia\Controls\Primitives;
/**
 */
enum ScrollEventType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SmallDecrement = 0;
	case SmallIncrement = 1;
	case LargeDecrement = 2;
	case LargeIncrement = 3;
	case ThumbTrack = 4;
	case EndScroll = 5;
}
