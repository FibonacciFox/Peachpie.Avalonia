<?php
namespace System\Reflection;
enum MethodAttributes
{

	
	case MemberAccessMask = '7';
	case PrivateScope = '0';
	case Private = '1';
	case FamANDAssem = '2';
	case Assembly = '3';
	case Family = '4';
	case FamORAssem = '5';
	case Public = '6';
	case Static = '16';
	case Final = '32';
	case Virtual = '64';
	case HideBySig = '128';
	case CheckAccessOnOverride = '512';
	case VtableLayoutMask = '256';
	case ReuseSlot = '0';
	case NewSlot = '256';
	case Abstract = '1024';
	case SpecialName = '2048';
	case PinvokeImpl = '8192';
	case UnmanagedExport = '8';
	case RTSpecialName = '4096';
	case HasSecurity = '16384';
	case RequireSecObject = '32768';
	case ReservedMask = '53248';

}