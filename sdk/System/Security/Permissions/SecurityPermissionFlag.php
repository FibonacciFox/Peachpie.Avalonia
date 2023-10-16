<?php
namespace System\Security\Permissions;
/**
 */
enum SecurityPermissionFlag implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AllFlags = 0;
	case Assertion = 1;
	case BindingRedirects = 2;
	case ControlAppDomain = 4;
	case ControlDomainPolicy = 8;
	case ControlEvidence = 16;
	case ControlPolicy = 32;
	case ControlPrincipal = 64;
	case ControlThread = 128;
	case Execution = 256;
	case Infrastructure = 512;
	case NoFlags = 1024;
	case RemotingConfiguration = 2048;
	case SerializationFormatter = 4096;
	case SkipVerification = 8192;
	case UnmanagedCode = 16383;
}
