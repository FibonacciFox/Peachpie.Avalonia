<?php
namespace System\Globalization;
/**
 */
enum CorrectionAlgorithm implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case Year1988to2019 = 1;
	case Year1900to1987 = 2;
	case Year1800to1899 = 3;
	case Year1700to1799 = 4;
	case Year1620to1699 = 5;
}
