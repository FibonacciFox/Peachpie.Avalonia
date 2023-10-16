<?php
namespace System\Drawing\Imaging;
/**
 */
enum ImageCodecFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Encoder = 1;
	case Decoder = 2;
	case SupportBitmap = 4;
	case SupportVector = 8;
	case SeekableEncode = 16;
	case BlockingDecode = 32;
	case Builtin = 65536;
	case System = 131072;
	case User = 262144;
}
