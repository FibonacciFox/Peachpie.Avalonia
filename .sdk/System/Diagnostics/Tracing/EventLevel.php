<?php
namespace System\Diagnostics\Tracing;
enum EventLevel
{

	
	case LogAlways = '0';
	case Critical = '1';
	case Error = '2';
	case Warning = '3';
	case Informational = '4';
	case Verbose = '5';

}