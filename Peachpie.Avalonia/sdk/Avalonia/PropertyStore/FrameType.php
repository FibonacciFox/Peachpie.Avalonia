<?php
namespace Avalonia\PropertyStore;
/**
 */
enum FrameType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Style = 0;
	case TemplatedParentTheme = 1;
	case Theme = 2;
}
