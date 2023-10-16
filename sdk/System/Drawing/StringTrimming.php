<?php
namespace System\Drawing;
/**
 */
enum StringTrimming implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Character = 1;
	case Word = 2;
	case EllipsisCharacter = 3;
	case EllipsisWord = 4;
	case EllipsisPath = 5;
}
