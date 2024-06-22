<?php
namespace System;
enum UnescapeMode
{

	
	case CopyOnly = '0';
	case Escape = '1';
	case Unescape = '2';
	case EscapeUnescape = '3';
	case V1ToStringFlag = '4';
	case UnescapeAll = '8';
	case UnescapeAllOrThrow = '24';

}