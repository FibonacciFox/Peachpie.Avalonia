<?php
namespace System\Runtime\InteropServices;
/**
 */
enum DllImportSearchPath implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case UseDllDirectoryForDependencies = 0;
	case ApplicationDirectory = 2;
	case UserDirectories = 256;
	case System32 = 512;
	case SafeDirectories = 1024;
	case AssemblyDirectory = 2048;
	case LegacyBehavior = 4096;
}
