<?php
namespace Avalonia\X11;
/**
 */
enum RandrEvent implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case RRScreenChangeNotify = 0;
	case RRNotify = 1;
}
