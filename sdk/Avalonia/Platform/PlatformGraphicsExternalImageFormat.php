<?php
namespace Avalonia\Platform;
/**
 */
enum PlatformGraphicsExternalImageFormat implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case R8G8B8A8UNorm = 0;
	case B8G8R8A8UNorm = 1;
}
