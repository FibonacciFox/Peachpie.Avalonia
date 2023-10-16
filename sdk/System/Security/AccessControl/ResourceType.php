<?php
namespace System\Security\AccessControl;
/**
 */
enum ResourceType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unknown = 0;
	case FileObject = 1;
	case Service = 2;
	case Printer = 3;
	case RegistryKey = 4;
	case LMShare = 5;
	case KernelObject = 6;
	case WindowObject = 7;
	case DSObject = 8;
	case DSObjectAll = 9;
	case ProviderDefined = 10;
	case WmiGuidObject = 11;
	case RegistryWow6432Key = 12;
}
