<?php
namespace System\Runtime\InteropServices;
/**
 */
enum Architecture implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case X86 = 0;
	case X64 = 1;
	case Arm = 2;
	case Arm64 = 3;
	case Wasm = 4;
	case S390x = 5;
	case LoongArch64 = 6;
	case Armv6 = 7;
	case Ppc64le = 8;
}
