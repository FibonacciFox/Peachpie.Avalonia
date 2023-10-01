<?php
namespace Avalonia\Input;
/**
 */
enum PointerType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Mouse = 0;
	case Touch = 1;
	case Pen = 2;
}
