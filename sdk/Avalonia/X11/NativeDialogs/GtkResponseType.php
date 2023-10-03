<?php
namespace Avalonia\X11\NativeDialogs;
/**
 */
enum GtkResponseType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Help = -11;
	case Apply = -10;
	case No = -9;
	case Yes = -8;
	case Close = -7;
	case Cancel = -6;
	case Ok = -5;
	case DeleteEvent = -4;
	case Accept = -3;
	case Reject = -2;
	case None = -1;
}
