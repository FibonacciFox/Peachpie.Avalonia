<?php
namespace Avalonia\Controls;
/**
 */
enum RefreshVisualizerState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Idle = 0;
	case Peeking = 1;
	case Interacting = 2;
	case Pending = 3;
	case Refreshing = 4;
}
