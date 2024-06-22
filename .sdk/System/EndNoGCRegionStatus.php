<?php
namespace System;
enum EndNoGCRegionStatus
{

	
	case Succeeded = '0';
	case NotInProgress = '1';
	case GCInduced = '2';
	case AllocationExceeded = '3';

}