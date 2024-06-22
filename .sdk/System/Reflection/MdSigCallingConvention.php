<?php
namespace System\Reflection;
enum MdSigCallingConvention
{

	
	case CallConvMask = '15';
	case Default = '0';
	case C = '1';
	case StdCall = '2';
	case ThisCall = '3';
	case FastCall = '4';
	case Vararg = '5';
	case Field = '6';
	case LocalSig = '7';
	case Property = '8';
	case Unmanaged = '9';
	case GenericInst = '10';
	case Generic = '16';
	case HasThis = '32';
	case ExplicitThis = '64';

}