<?php
namespace System\Diagnostics\Tracing;
enum WriteEventErrorCode
{

	
	case NoError = '0';
	case NoFreeBuffers = '1';
	case EventTooBig = '2';
	case NullInput = '3';
	case TooManyArgs = '4';
	case Other = '5';

}