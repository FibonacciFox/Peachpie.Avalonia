<?php
namespace System\Diagnostics\Tracing;
enum EventFieldFormat
{

	
	case Default = '0';
	case String = '2';
	case Boolean = '3';
	case Hexadecimal = '4';
	case Xml = '11';
	case Json = '12';
	case HResult = '15';

}