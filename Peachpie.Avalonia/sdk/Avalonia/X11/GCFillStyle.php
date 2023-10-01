<?php
namespace Avalonia\X11;
/**
 */
enum GCFillStyle implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case FillSolid = 0;
	case FillTiled = 1;
	case FillStippled = 2;
	case FillOpaqueStppled = 3;
}
