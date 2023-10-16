<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum CombineMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Replace = 0;
	case Intersect = 1;
	case Union = 2;
	case Xor = 3;
	case Exclude = 4;
	case Complement = 5;
}
