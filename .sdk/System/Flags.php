<?php
namespace System;
enum Flags
{

	
	case Zero = '0';
	case SchemeNotCanonical = '1';
	case UserNotCanonical = '2';
	case HostNotCanonical = '4';
	case PortNotCanonical = '8';
	case PathNotCanonical = '16';
	case QueryNotCanonical = '32';
	case FragmentNotCanonical = '64';
	case CannotDisplayCanonical = '127';
	case E_UserNotCanonical = '128';
	case E_HostNotCanonical = '256';
	case E_PortNotCanonical = '512';
	case E_PathNotCanonical = '1024';
	case E_QueryNotCanonical = '2048';
	case E_FragmentNotCanonical = '4096';
	case E_CannotDisplayCanonical = '8064';
	case ShouldBeCompressed = '8192';
	case FirstSlashAbsent = '16384';
	case BackslashInPath = '32768';
	case IndexMask = '65535';
	case HostTypeMask = '458752';
	case HostNotParsed = '0';
	case IPv6HostType = '65536';
	case IPv4HostType = '131072';
	case DnsHostType = '196608';
	case UncHostType = '262144';
	case BasicHostType = '327680';
	case UnusedHostType = '393216';
	case UnknownHostType = '458752';
	case UserEscaped = '524288';
	case AuthorityFound = '1048576';
	case HasUserInfo = '2097152';
	case LoopbackHost = '4194304';
	case NotDefaultPort = '8388608';
	case UserDrivenParsing = '16777216';
	case CanonicalDnsHost = '33554432';
	case ErrorOrParsingRecursion = '67108864';
	case DosPath = '134217728';
	case UncPath = '268435456';
	case ImplicitFile = '536870912';
	case MinimalUriInfoSet = '1073741824';
	case AllUriInfoSet = '2147483648';
	case IdnHost = '4294967296';
	case HasUnicode = '8589934592';
	case HostUnicodeNormalized = '17179869184';
	case RestUnicodeNormalized = '34359738368';
	case UnicodeHost = '68719476736';
	case IntranetUri = '137438953472';
	case UserIriCanonical = '549755813888';
	case PathIriCanonical = '1099511627776';
	case QueryIriCanonical = '2199023255552';
	case FragmentIriCanonical = '4398046511104';
	case IriCanonical = '8246337208320';
	case UnixPath = '17592186044416';
	case DisablePathAndQueryCanonicalization = '35184372088832';
	case CustomParser_ParseMinimalAlreadyCalled = '4611686018427387904';
	case Debug_LeftConstructor = '9223372036854775808';

}