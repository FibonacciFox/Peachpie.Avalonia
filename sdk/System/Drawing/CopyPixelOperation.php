<?php
namespace System\Drawing;
/**
 */
enum CopyPixelOperation implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NoMirrorBitmap = 66;
	case Blackness = 1114278;
	case NotSourceErase = 3342344;
	case NotSourceCopy = 4457256;
	case SourceErase = 5570569;
	case DestinationInvert = 5898313;
	case PatInvert = 6684742;
	case SourceInvert = 8913094;
	case SourceAnd = 12255782;
	case MergePaint = 12583114;
	case MergeCopy = 13369376;
	case SourceCopy = 15597702;
	case SourcePaint = 15728673;
	case PatCopy = 16452105;
	case PatPaint = 16711778;
	case Whiteness = 1073741824;
	case CaptureBlt = -2147483648;
}
