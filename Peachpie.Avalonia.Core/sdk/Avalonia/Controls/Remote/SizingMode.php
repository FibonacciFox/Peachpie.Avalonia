<?php
namespace Avalonia\Controls\Remote;
/**
 */
enum SizingMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Local = 0;
	case Remote = 1;
}
