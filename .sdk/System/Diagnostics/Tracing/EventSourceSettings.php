<?php
namespace System\Diagnostics\Tracing;
enum EventSourceSettings
{

	
	case Default = '0';
	case ThrowOnEventWriteErrors = '1';
	case EtwManifestEventFormat = '4';
	case EtwSelfDescribingEventFormat = '8';

}