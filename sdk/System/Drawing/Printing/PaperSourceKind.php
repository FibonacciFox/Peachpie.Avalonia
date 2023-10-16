<?php
namespace System\Drawing\Printing;
/**
 */
enum PaperSourceKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Upper = 1;
	case Lower = 2;
	case Middle = 3;
	case Manual = 4;
	case Envelope = 5;
	case ManualFeed = 6;
	case AutomaticFeed = 7;
	case TractorFeed = 8;
	case SmallFormat = 9;
	case LargeFormat = 10;
	case LargeCapacity = 11;
	case Cassette = 14;
	case FormSource = 15;
	case Custom = 257;
}
