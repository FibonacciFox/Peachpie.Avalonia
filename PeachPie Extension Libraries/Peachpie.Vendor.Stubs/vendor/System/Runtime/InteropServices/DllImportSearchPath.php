<?php
namespace System\Runtime\InteropServices;
enum DllImportSearchPath
{
	
	case UseDllDirectoryForDependencies = '256';
	case ApplicationDirectory = '512';
	case UserDirectories = '1024';
	case System32 = '2048';
	case SafeDirectories = '4096';
	case AssemblyDirectory = '2';
	case LegacyBehavior = '0';

}