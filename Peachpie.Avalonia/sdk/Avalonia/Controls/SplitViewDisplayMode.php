<?php
namespace Avalonia\Controls;
/**
 */
enum SplitViewDisplayMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Inline = 0;
	case CompactInline = 1;
	case Overlay = 2;
	case CompactOverlay = 3;
}
