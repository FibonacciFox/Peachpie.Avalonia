<?php
namespace System\Diagnostics\Tracing;
enum EventKeywords
{
	
	case None = '0';
	case All = '-1';
	case MicrosoftTelemetry = '562949953421312';
	case WdiContext = '562949953421312';
	case WdiDiagnostic = '1125899906842624';
	case Sqm = '2251799813685248';
	case AuditFailure = '4503599627370496';
	case AuditSuccess = '9007199254740992';
	case CorrelationHint = '4503599627370496';
	case EventLogClassic = '36028797018963968';

}