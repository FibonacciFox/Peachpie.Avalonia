<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
enum DynamicallyAccessedMemberTypes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case PublicParameterlessConstructor = 1;
	case PublicConstructors = 3;
	case NonPublicConstructors = 4;
	case PublicMethods = 8;
	case NonPublicMethods = 16;
	case PublicFields = 32;
	case NonPublicFields = 64;
	case PublicNestedTypes = 128;
	case NonPublicNestedTypes = 256;
	case PublicProperties = 512;
	case NonPublicProperties = 1024;
	case PublicEvents = 2048;
	case NonPublicEvents = 4096;
	case Interfaces = 8192;
	case All = -1;
}
