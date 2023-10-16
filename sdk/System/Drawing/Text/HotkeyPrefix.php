<?php
namespace System\Drawing\Text;
/**
 */
enum HotkeyPrefix implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Show = 1;
	case Hide = 2;
}
