<?php
namespace System\Threading\Tasks\Sources;
enum ValueTaskSourceStatus
{

	
	case Pending = '0';
	case Succeeded = '1';
	case Faulted = '2';
	case Canceled = '3';

}