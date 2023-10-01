<?php
namespace Avalonia\Rendering;
/**
 */
enum RendererDebugOverlays implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Fps = 1;
	case DirtyRects = 2;
	case LayoutTimeGraph = 4;
	case RenderTimeGraph = 8;
}
