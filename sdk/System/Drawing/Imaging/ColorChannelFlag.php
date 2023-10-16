<?php
namespace System\Drawing\Imaging;
/**
 */
enum ColorChannelFlag implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ColorChannelC = 0;
	case ColorChannelM = 1;
	case ColorChannelY = 2;
	case ColorChannelK = 3;
	case ColorChannelLast = 4;
}
