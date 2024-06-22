<?php
namespace System\Reflection;
enum FieldAttributes
{

	
	case FieldAccessMask = '7';
	case PrivateScope = '0';
	case Private = '1';
	case FamANDAssem = '2';
	case Assembly = '3';
	case Family = '4';
	case FamORAssem = '5';
	case Public = '6';
	case Static = '16';
	case InitOnly = '32';
	case Literal = '64';
	case NotSerialized = '128';
	case SpecialName = '512';
	case PinvokeImpl = '8192';
	case RTSpecialName = '1024';
	case HasFieldMarshal = '4096';
	case HasDefault = '32768';
	case HasFieldRVA = '256';
	case ReservedMask = '38144';

}