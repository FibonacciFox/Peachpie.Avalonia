<?php
namespace Avalonia\X11;
/**
 */
enum XWMHintsFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case InputHint = 1;
	case StateHint = 2;
	case IconPixmapHint = 4;
	case IconWindowHint = 8;
	case IconPositionHint = 16;
	case IconMaskHint = 32;
	case WindowGroupHint = 64;
	case AllHints = 127;
}
