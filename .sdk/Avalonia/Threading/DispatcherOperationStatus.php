<?php
namespace Avalonia\Threading;
enum DispatcherOperationStatus
{
	
	case Pending = '0';
	case Aborted = '1';
	case Completed = '2';
	case Executing = '3';

}