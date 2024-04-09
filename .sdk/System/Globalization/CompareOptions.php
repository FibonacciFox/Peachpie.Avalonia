<?php
namespace System\Globalization;
enum CompareOptions
{
	
	case None = '0';
	case IgnoreCase = '1';
	case IgnoreNonSpace = '2';
	case IgnoreSymbols = '4';
	case IgnoreKanaType = '8';
	case IgnoreWidth = '16';
	case OrdinalIgnoreCase = '268435456';
	case StringSort = '536870912';
	case Ordinal = '1073741824';

}