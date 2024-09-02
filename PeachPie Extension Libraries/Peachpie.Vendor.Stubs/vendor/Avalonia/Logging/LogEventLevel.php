<?php
namespace Avalonia\Logging;
enum LogEventLevel
{
	
	case Verbose = '0';
	case Debug = '1';
	case Information = '2';
	case Warning = '3';
	case Error = '4';
	case Fatal = '5';

}