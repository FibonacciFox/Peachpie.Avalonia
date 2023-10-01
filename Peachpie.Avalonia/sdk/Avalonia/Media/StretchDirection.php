<?php
namespace Avalonia\Media;
/**
 */
enum StretchDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case UpOnly = 0;
	case DownOnly = 1;
	case Both = 2;
}
