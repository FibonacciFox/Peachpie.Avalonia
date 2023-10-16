<?php
namespace System\Text;
/**
 */
enum NormalizationForm implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case FormC = 1;
	case FormD = 2;
	case FormKC = 5;
	case FormKD = 6;
}
