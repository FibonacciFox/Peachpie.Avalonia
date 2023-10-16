<?php
namespace System\Drawing\Drawing2D;
/**
 */
enum FlushIntention implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Flush = 0;
	case Sync = 1;
}
