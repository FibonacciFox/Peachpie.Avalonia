<?php
namespace Avalonia\X11;
/**
 */
enum RandrEventMask implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case RRScreenChangeNotify = 1;
	case RRCrtcChangeNotifyMask = 2;
	case RROutputChangeNotifyMask = 4;
	case RROutputPropertyNotifyMask = 8;
	case RRProviderChangeNotifyMask = 16;
	case RRProviderPropertyNotifyMask = 32;
	case RRResourceChangeNotifyMask = 64;
	case RRLeaseNotifyMask = 128;
}
