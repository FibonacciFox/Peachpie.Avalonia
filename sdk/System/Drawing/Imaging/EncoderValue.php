<?php
namespace System\Drawing\Imaging;
/**
 */
enum EncoderValue implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ColorTypeCMYK = 0;
	case ColorTypeYCCK = 1;
	case CompressionLZW = 2;
	case CompressionCCITT3 = 3;
	case CompressionCCITT4 = 4;
	case CompressionRle = 5;
	case CompressionNone = 6;
	case ScanMethodInterlaced = 7;
	case ScanMethodNonInterlaced = 8;
	case VersionGif87 = 9;
	case VersionGif89 = 10;
	case RenderProgressive = 11;
	case RenderNonProgressive = 12;
	case TransformRotate90 = 13;
	case TransformRotate180 = 14;
	case TransformRotate270 = 15;
	case TransformFlipHorizontal = 16;
	case TransformFlipVertical = 17;
	case MultiFrame = 18;
	case LastFrame = 19;
	case Flush = 20;
	case FrameDimensionTime = 21;
	case FrameDimensionResolution = 22;
	case FrameDimensionPage = 23;
}
