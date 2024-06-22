<?php
namespace System\Threading\Tasks;
enum ProcessingMode
{

	
	case NotCurrentlyProcessing = '0';
	case ProcessingExclusiveTask = '1';
	case ProcessingConcurrentTasks = '2';
	case Completing = '4';
	case Completed = '8';

}