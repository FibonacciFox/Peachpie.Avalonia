<?php
namespace System\Reflection;
/**
 */
enum ProcessorArchitecture implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case MSIL = 1;
	case X86 = 2;
	case IA64 = 3;
	case Amd64 = 4;
	case Arm = 5;
}
