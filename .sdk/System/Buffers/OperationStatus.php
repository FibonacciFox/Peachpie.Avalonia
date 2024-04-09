<?php
namespace System\Buffers;
enum OperationStatus
{
	
	case Done = '0';
	case DestinationTooSmall = '1';
	case NeedMoreData = '2';
	case InvalidData = '3';

}