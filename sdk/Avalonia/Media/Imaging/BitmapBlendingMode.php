<?php
namespace Avalonia\Media\Imaging;
/**
 */
enum BitmapBlendingMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unspecified = 0;
	case SourceOver = 1;
	case Source = 2;
	case Destination = 3;
	case DestinationOver = 4;
	case SourceIn = 5;
	case DestinationIn = 6;
	case SourceOut = 7;
	case DestinationOut = 8;
	case SourceAtop = 9;
	case DestinationAtop = 10;
	case Xor = 11;
	case Plus = 12;
}
