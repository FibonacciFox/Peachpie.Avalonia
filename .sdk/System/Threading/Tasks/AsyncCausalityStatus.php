<?php
namespace System\Threading\Tasks;
enum AsyncCausalityStatus
{
	
	case Started = '0';
	case Completed = '1';
	case Canceled = '2';
	case Error = '3';

}