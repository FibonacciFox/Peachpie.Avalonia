<?php
namespace Avalonia\Controls\Primitives;
/**
 */
enum SnapPointsType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Mandatory = 1;
	case MandatorySingle = 2;
}
