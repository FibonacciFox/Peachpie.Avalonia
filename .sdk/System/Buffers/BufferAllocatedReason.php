<?php
namespace System\Buffers;
enum BufferAllocatedReason
{

	
	case Pooled = '0';
	case OverMaximumSize = '1';
	case PoolExhausted = '2';

}