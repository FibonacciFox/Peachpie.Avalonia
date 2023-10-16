<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum DVASPECT implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DVASPECT_CONTENT = 1;
	case DVASPECT_THUMBNAIL = 2;
	case DVASPECT_ICON = 4;
	case DVASPECT_DOCPRINT = 8;
}
