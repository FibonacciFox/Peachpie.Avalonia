<?php
namespace System;
enum Check
{
	
	case None = '0';
	case EscapedCanonical = '1';
	case DisplayCanonical = '2';
	case DotSlashAttn = '4';
	case DotSlashEscaped = '128';
	case BackslashInPath = '16';
	case ReservedFound = '32';
	case NotIriCanonical = '64';
	case FoundNonAscii = '8';

}