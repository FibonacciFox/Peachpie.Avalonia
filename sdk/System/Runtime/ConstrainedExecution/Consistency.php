<?php
namespace System\Runtime\ConstrainedExecution;
/**
 */
enum Consistency implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case MayCorruptProcess = 0;
	case MayCorruptAppDomain = 1;
	case MayCorruptInstance = 2;
	case WillNotCorruptState = 3;
}
