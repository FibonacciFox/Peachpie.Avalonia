<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum PenAlignment implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Center = 0;
	case Inset = 1;
	case Outset = 2;
	case Left = 3;
	case Right = 4;
}
