<?php
namespace System\Diagnostics\Tracing;
enum EventCommand
{
	
	case Update = '0';
	case SendManifest = '-1';
	case Enable = '-2';
	case Disable = '-3';

}