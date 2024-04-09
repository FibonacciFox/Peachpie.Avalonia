<?php
namespace System\Reflection;
enum MethodImplAttributes
{
	
	case CodeTypeMask = '3';
	case IL = '0';
	case Native = '1';
	case OPTIL = '2';
	case Runtime = '3';
	case ManagedMask = '4';
	case Unmanaged = '4';
	case Managed = '0';
	case ForwardRef = '16';
	case PreserveSig = '128';
	case InternalCall = '4096';
	case Synchronized = '32';
	case NoInlining = '8';
	case AggressiveInlining = '256';
	case NoOptimization = '64';
	case AggressiveOptimization = '512';
	case MaxMethodImplVal = '65535';

}