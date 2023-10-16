<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum QualityMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Invalid = 0;
	case Default = 1;
	case Low = 2;
	case High = -1;
}
