<?php
namespace System\Diagnostics\Tracing;
enum EventManifestOptions
{

	
	case None = '0';
	case Strict = '1';
	case AllCultures = '2';
	case OnlyIfNeededForRegistration = '4';
	case AllowEventSourceOverride = '8';

}