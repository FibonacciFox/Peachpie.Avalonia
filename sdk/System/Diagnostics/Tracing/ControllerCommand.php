<?php
namespace System\Diagnostics\Tracing;
/**
 */
enum ControllerCommand implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Update = 0;
	case SendManifest = -3;
	case Enable = -2;
	case Disable = -1;
}
