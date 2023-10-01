<?php
namespace Avalonia\Controls;
/**
 */
enum AutoCompleteFilterMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case StartsWith = 1;
	case StartsWithCaseSensitive = 2;
	case StartsWithOrdinal = 3;
	case StartsWithOrdinalCaseSensitive = 4;
	case Contains = 5;
	case ContainsCaseSensitive = 6;
	case ContainsOrdinal = 7;
	case ContainsOrdinalCaseSensitive = 8;
	case Equals = 9;
	case EqualsCaseSensitive = 10;
	case EqualsOrdinal = 11;
	case EqualsOrdinalCaseSensitive = 12;
	case Custom = 13;
}
