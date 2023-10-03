<?php
namespace Avalonia\X11;
/**
 */
enum GCArcMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ArcChord = 0;
	case ArcPieSlice = 1;
}
