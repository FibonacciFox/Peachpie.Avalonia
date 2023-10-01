<?php
namespace Avalonia\Controls;
/**
 */
enum Flags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ValidDefinitionsUStructure = 1;
	case ValidDefinitionsVStructure = 2;
	case ValidCellsStructure = 4;
	case ShowGridLinesPropertyValue = 256;
	case ListenToNotifications = 4096;
	case SizeToContentU = 8192;
	case SizeToContentV = 16384;
	case HasStarCellsU = 32768;
	case HasStarCellsV = 65536;
	case HasGroup3CellsInAutoRows = 131072;
	case MeasureOverrideInProgress = 262144;
	case ArrangeOverrideInProgress = 524288;
}
