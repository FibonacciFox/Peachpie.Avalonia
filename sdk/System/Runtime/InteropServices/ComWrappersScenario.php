<?php
namespace System\Runtime\InteropServices;
/**
 */
enum ComWrappersScenario implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Instance = 0;
	case TrackerSupportGlobalInstance = 1;
	case MarshallingGlobalInstance = 2;
}
