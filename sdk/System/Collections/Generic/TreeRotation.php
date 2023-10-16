<?php
namespace System\Collections\Generic;
/**
 */
enum TreeRotation implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Left = 0;
	case LeftRight = 1;
	case Right = 2;
	case RightLeft = 3;
}
