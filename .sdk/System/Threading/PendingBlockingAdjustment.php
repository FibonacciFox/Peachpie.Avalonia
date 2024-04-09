<?php
namespace System\Threading;
enum PendingBlockingAdjustment
{
	
	case None = '0';
	case Immediately = '1';
	case WithDelayIfNecessary = '2';

}