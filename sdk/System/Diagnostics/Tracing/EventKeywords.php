<?php
namespace System\Diagnostics\Tracing;
/**
 */
enum EventKeywords implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case All = 562949953421312;
	case MicrosoftTelemetry = 562949953421312;
	case WdiContext = 1125899906842624;
	case WdiDiagnostic = 2251799813685248;
	case Sqm = 4503599627370496;
	case AuditFailure = 4503599627370496;
	case AuditSuccess = 9007199254740992;
	case CorrelationHint = 36028797018963968;
	case EventLogClassic = -1;
}
