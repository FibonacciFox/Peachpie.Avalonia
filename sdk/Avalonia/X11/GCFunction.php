<?php
namespace Avalonia\X11;
/**
 */
enum GCFunction implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case GCFunction = 1;
	case GCPlaneMask = 2;
	case GCForeground = 4;
	case GCBackground = 8;
	case GCLineWidth = 16;
	case GCLineStyle = 32;
	case GCCapStyle = 64;
	case GCJoinStyle = 128;
	case GCFillStyle = 256;
	case GCFillRule = 512;
	case GCTile = 1024;
	case GCStipple = 2048;
	case GCTileStipXOrigin = 4096;
	case GCTileStipYOrigin = 8192;
	case GCFont = 16384;
	case GCSubwindowMode = 32768;
	case GCGraphicsExposures = 65536;
	case GCClipXOrigin = 131072;
	case GCClipYOrigin = 262144;
	case GCClipMask = 524288;
	case GCDashOffset = 1048576;
	case GCDashList = 2097152;
	case GCArcMode = 4194304;
}
