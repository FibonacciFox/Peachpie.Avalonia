<?php
namespace System\Reflection;
enum InvocationFlags
{
	
	case Unknown = '0';
	case Initialized = '1';
	case NoInvoke = '2';
	case RunClassConstructor = '4';
	case NoConstructorInvoke = '8';
	case IsConstructor = '16';
	case IsDelegateConstructor = '128';
	case ContainsStackPointers = '256';
	case SpecialField = '16';
	case FieldSpecialCast = '32';

}