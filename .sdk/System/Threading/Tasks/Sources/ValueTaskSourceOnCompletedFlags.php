<?php
namespace System\Threading\Tasks\Sources;
enum ValueTaskSourceOnCompletedFlags
{

	
	case None = '0';
	case UseSchedulingContext = '1';
	case FlowExecutionContext = '2';

}