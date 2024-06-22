<?php
namespace System\Runtime;
enum GCLatencyMode
{

	
	case Batch = '0';
	case Interactive = '1';
	case LowLatency = '2';
	case SustainedLowLatency = '3';
	case NoGCRegion = '4';

}