<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum DirectXPixelFormat implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unknown = 0;
	case R32G32B32A32Typeless = 1;
	case R32G32B32A32Float = 2;
	case R32G32B32A32UInt = 3;
	case R32G32B32A32Int = 4;
	case R32G32B32Typeless = 5;
	case R32G32B32Float = 6;
	case R32G32B32UInt = 7;
	case R32G32B32Int = 8;
	case R16G16B16A16Typeless = 9;
	case R16G16B16A16Float = 10;
	case R16G16B16A16UIntNormalized = 11;
	case R16G16B16A16UInt = 12;
	case R16G16B16A16IntNormalized = 13;
	case R16G16B16A16Int = 14;
	case R32G32Typeless = 15;
	case R32G32Float = 16;
	case R32G32UInt = 17;
	case R32G32Int = 18;
	case R32G8X24Typeless = 19;
	case D32FloatS8X24UInt = 20;
	case R32FloatX8X24Typeless = 21;
	case X32TypelessG8X24UInt = 22;
	case R10G10B10A2Typeless = 23;
	case R10G10B10A2UIntNormalized = 24;
	case R10G10B10A2UInt = 25;
	case R11G11B10Float = 26;
	case R8G8B8A8Typeless = 27;
	case R8G8B8A8UIntNormalized = 28;
	case R8G8B8A8UIntNormalizedSrgb = 29;
	case R8G8B8A8UInt = 30;
	case R8G8B8A8IntNormalized = 31;
	case R8G8B8A8Int = 32;
	case R16G16Typeless = 33;
	case R16G16Float = 34;
	case R16G16UIntNormalized = 35;
	case R16G16UInt = 36;
	case R16G16IntNormalized = 37;
	case R16G16Int = 38;
	case R32Typeless = 39;
	case D32Float = 40;
	case R32Float = 41;
	case R32UInt = 42;
	case R32Int = 43;
	case R24G8Typeless = 44;
	case D24UIntNormalizedS8UInt = 45;
	case R24UIntNormalizedX8Typeless = 46;
	case X24TypelessG8UInt = 47;
	case R8G8Typeless = 48;
	case R8G8UIntNormalized = 49;
	case R8G8UInt = 50;
	case R8G8IntNormalized = 51;
	case R8G8Int = 52;
	case R16Typeless = 53;
	case R16Float = 54;
	case D16UIntNormalized = 55;
	case R16UIntNormalized = 56;
	case R16UInt = 57;
	case R16IntNormalized = 58;
	case R16Int = 59;
	case R8Typeless = 60;
	case R8UIntNormalized = 61;
	case R8UInt = 62;
	case R8IntNormalized = 63;
	case R8Int = 64;
	case A8UIntNormalized = 65;
	case R1UIntNormalized = 66;
	case R9G9B9E5SharedExponent = 67;
	case R8G8B8G8UIntNormalized = 68;
	case G8R8G8B8UIntNormalized = 69;
	case BC1Typeless = 70;
	case BC1UIntNormalized = 71;
	case BC1UIntNormalizedSrgb = 72;
	case BC2Typeless = 73;
	case BC2UIntNormalized = 74;
	case BC2UIntNormalizedSrgb = 75;
	case BC3Typeless = 76;
	case BC3UIntNormalized = 77;
	case BC3UIntNormalizedSrgb = 78;
	case BC4Typeless = 79;
	case BC4UIntNormalized = 80;
	case BC4IntNormalized = 81;
	case BC5Typeless = 82;
	case BC5UIntNormalized = 83;
	case BC5IntNormalized = 84;
	case B5G6R5UIntNormalized = 85;
	case B5G5R5A1UIntNormalized = 86;
	case B8G8R8A8UIntNormalized = 87;
	case B8G8R8X8UIntNormalized = 88;
	case R10G10B10XRBiasA2UIntNormalized = 89;
	case B8G8R8A8Typeless = 90;
	case B8G8R8A8UIntNormalizedSrgb = 91;
	case B8G8R8X8Typeless = 92;
	case B8G8R8X8UIntNormalizedSrgb = 93;
	case BC6HTypeless = 94;
	case BC6H16UnsignedFloat = 95;
	case BC6H16Float = 96;
	case BC7Typeless = 97;
	case BC7UIntNormalized = 98;
	case BC7UIntNormalizedSrgb = 99;
	case Ayuv = 100;
	case Y410 = 101;
	case Y416 = 102;
	case NV12 = 103;
	case P010 = 104;
	case P016 = 105;
	case Opaque420 = 106;
	case Yuy2 = 107;
	case Y210 = 108;
	case Y216 = 109;
	case NV11 = 110;
	case AI44 = 111;
	case IA44 = 112;
	case P8 = 113;
	case A8P8 = 114;
	case B4G4R4A4UIntNormalized = 115;
	case P208 = 130;
	case V208 = 131;
	case V408 = 132;
}
