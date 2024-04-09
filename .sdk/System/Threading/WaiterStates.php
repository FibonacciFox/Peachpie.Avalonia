<?php
namespace System\Threading;
enum WaiterStates
{
	
	case None = '0';
	case NoWaiters = '1';
	case WriteWaiterSignaled = '2';
	case UpgradeableReadWaiterSignaled = '4';

}