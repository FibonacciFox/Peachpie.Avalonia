<?php
namespace System;
enum UriSyntaxFlags
{

	
	case None = '0';
	case MustHaveAuthority = '1';
	case OptionalAuthority = '2';
	case MayHaveUserInfo = '4';
	case MayHavePort = '8';
	case MayHavePath = '16';
	case MayHaveQuery = '32';
	case MayHaveFragment = '64';
	case AllowEmptyHost = '128';
	case AllowUncHost = '256';
	case AllowDnsHost = '512';
	case AllowIPv4Host = '1024';
	case AllowIPv6Host = '2048';
	case AllowAnInternetHost = '3584';
	case AllowAnyOtherHost = '4096';
	case FileLikeUri = '8192';
	case MailToLikeUri = '16384';
	case V1_UnknownUri = '65536';
	case SimpleUserSyntax = '131072';
	case BuiltInSyntax = '262144';
	case ParserSchemeOnly = '524288';
	case AllowDOSPath = '1048576';
	case PathIsRooted = '2097152';
	case ConvertPathSlashes = '4194304';
	case CompressPath = '8388608';
	case CanonicalizeAsFilePath = '16777216';
	case UnEscapeDotsAndSlashes = '33554432';
	case AllowIdn = '67108864';
	case AllowIriParsing = '268435456';

}