<?php
namespace Avalonia\X11;
/**
 */
enum GCSubwindowMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ClipByChildren = 0;
	case IncludeInferiors = 1;
}
