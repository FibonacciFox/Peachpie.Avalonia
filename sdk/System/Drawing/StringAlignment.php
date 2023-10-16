<?php
namespace System\Drawing;
/**
 */
enum StringAlignment implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Near = 0;
	case Center = 1;
	case Far = 2;
}
