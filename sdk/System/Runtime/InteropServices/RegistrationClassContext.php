<?php
namespace System\Runtime\InteropServices;
/**
 */
enum RegistrationClassContext implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case InProcessServer = 1;
	case InProcessHandler = 2;
	case LocalServer = 4;
	case InProcessServer16 = 8;
	case RemoteServer = 16;
	case InProcessHandler16 = 32;
	case Reserved1 = 64;
	case Reserved2 = 128;
	case Reserved3 = 256;
	case Reserved4 = 512;
	case NoCodeDownload = 1024;
	case Reserved5 = 2048;
	case NoCustomMarshal = 4096;
	case EnableCodeDownload = 8192;
	case NoFailureLog = 16384;
	case DisableActivateAsActivator = 32768;
	case EnableActivateAsActivator = 65536;
	case FromDefaultContext = 131072;
}
