<?php
namespace Avalonia;
/**
 */
enum Win32CompositionMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case WinUIComposition = 1;
	case LowLatencyDxgiSwapChain = 3;
	case RedirectionSurface = 4;
}
