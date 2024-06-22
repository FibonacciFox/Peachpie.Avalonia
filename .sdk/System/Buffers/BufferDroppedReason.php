<?php
namespace System\Buffers;
enum BufferDroppedReason
{

	
	case Full = '0';
	case OverMaximumSize = '1';

}