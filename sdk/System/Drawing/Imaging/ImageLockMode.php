<?php
namespace System\Drawing\Imaging;
/**
 */
enum ImageLockMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ReadOnly = 1;
	case WriteOnly = 2;
	case ReadWrite = 3;
	case UserInputBuffer = 4;
}
