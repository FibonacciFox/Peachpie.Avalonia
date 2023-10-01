<?php
namespace Avalonia\X11;
/**
 */
enum XiPredefinedDeviceId implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case XIAllDevices = 0;
	case XIAllMasterDevices = 1;
}
