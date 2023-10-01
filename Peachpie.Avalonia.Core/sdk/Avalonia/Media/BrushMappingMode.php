<?php
namespace Avalonia\Media;
/**
 */
enum BrushMappingMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Absolute = 0;
	case RelativeToBoundingBox = 1;
}
