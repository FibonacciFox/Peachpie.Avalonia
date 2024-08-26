<?php
namespace System;
enum UriComponents
{
	
	case Scheme = '1';
	case UserInfo = '2';
	case Host = '4';
	case Port = '8';
	case Path = '16';
	case Query = '32';
	case Fragment = '64';
	case StrongPort = '128';
	case NormalizedHost = '256';
	case KeepDelimiter = '1073741824';
	case SerializationInfoString = '-2147483648';
	case AbsoluteUri = '127';
	case HostAndPort = '132';
	case StrongAuthority = '134';
	case SchemeAndServer = '13';
	case HttpRequestUrl = '61';
	case PathAndQuery = '48';

}