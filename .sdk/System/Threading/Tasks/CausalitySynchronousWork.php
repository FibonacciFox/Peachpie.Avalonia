<?php
namespace System\Threading\Tasks;
enum CausalitySynchronousWork
{
	
	case CompletionNotification = '0';
	case ProgressNotification = '1';
	case Execution = '2';

}