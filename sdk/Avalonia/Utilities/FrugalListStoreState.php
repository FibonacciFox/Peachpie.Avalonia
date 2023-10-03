<?php
namespace Avalonia\Utilities;
/**
 */
enum FrugalListStoreState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Success = 0;
	case SingleItemList = 1;
	case ThreeItemList = 2;
	case SixItemList = 3;
	case Array = 4;
}
