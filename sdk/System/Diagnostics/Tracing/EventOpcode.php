<?php
namespace System\Diagnostics\Tracing;
/**
 */
enum EventOpcode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Info = 0;
	case Start = 1;
	case Stop = 2;
	case DataCollectionStart = 3;
	case DataCollectionStop = 4;
	case Extension = 5;
	case Reply = 6;
	case Resume = 7;
	case Suspend = 8;
	case Send = 9;
	case Receive = 240;
}
