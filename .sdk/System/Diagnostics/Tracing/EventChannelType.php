<?php
namespace System\Diagnostics\Tracing;
enum EventChannelType
{
	
	case Admin = '1';
	case Operational = '2';
	case Analytic = '3';
	case Debug = '4';

}