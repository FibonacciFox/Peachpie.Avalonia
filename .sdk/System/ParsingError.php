<?php
namespace System;
enum ParsingError
{

	
	case None = '0';
	case BadFormat = '1';
	case BadScheme = '2';
	case BadAuthority = '3';
	case EmptyUriString = '4';
	case LastRelativeUriOkErrIndex = '4';
	case SchemeLimit = '5';
	case SizeLimit = '6';
	case MustRootedPath = '7';
	case BadHostName = '8';
	case NonEmptyHost = '9';
	case BadPort = '10';
	case BadAuthorityTerminator = '11';
	case CannotCreateRelative = '12';

}