<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum CompositingMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SourceOver = 0;
	case SourceCopy = 1;
}
