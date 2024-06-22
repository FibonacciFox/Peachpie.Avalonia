<?php
namespace System;
enum GenericUriParserOptions
{

	
	case Default = '0';
	case GenericAuthority = '1';
	case AllowEmptyAuthority = '2';
	case NoUserInfo = '4';
	case NoPort = '8';
	case NoQuery = '16';
	case NoFragment = '32';
	case DontConvertPathBackslashes = '64';
	case DontCompressPath = '128';
	case DontUnescapePathDotsAndSlashes = '256';
	case Idn = '512';
	case IriParsing = '1024';

}