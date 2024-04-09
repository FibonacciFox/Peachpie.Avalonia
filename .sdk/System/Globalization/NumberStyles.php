<?php
namespace System\Globalization;
enum NumberStyles
{
	
	case None = '0';
	case AllowLeadingWhite = '1';
	case AllowTrailingWhite = '2';
	case AllowLeadingSign = '4';
	case AllowTrailingSign = '8';
	case AllowParentheses = '16';
	case AllowDecimalPoint = '32';
	case AllowThousands = '64';
	case AllowExponent = '128';
	case AllowCurrencySymbol = '256';
	case AllowHexSpecifier = '512';
	case Integer = '7';
	case HexNumber = '515';
	case Number = '111';
	case Float = '167';
	case Currency = '383';
	case Any = '511';

}