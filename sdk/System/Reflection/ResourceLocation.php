<?php
namespace System\Reflection;
/**
 */
enum ResourceLocation implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ContainedInAnotherAssembly = 1;
	case ContainedInManifestFile = 2;
	case Embedded = 4;
}
