<?php
namespace Avalonia\Rendering;
enum RendererDebugOverlays
{

	
	case None = '0';
	case Fps = '1';
	case DirtyRects = '2';
	case LayoutTimeGraph = '4';
	case RenderTimeGraph = '8';

}