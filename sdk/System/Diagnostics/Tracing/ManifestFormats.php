<?php
namespace System\Diagnostics\Tracing;
/**
 */
enum ManifestFormats implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SimpleXmlFormat = 1;
}
