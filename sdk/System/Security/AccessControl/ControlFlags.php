<?php
namespace System\Security\AccessControl;
/**
 */
enum ControlFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case OwnerDefaulted = 1;
	case GroupDefaulted = 2;
	case DiscretionaryAclPresent = 4;
	case DiscretionaryAclDefaulted = 8;
	case SystemAclPresent = 16;
	case SystemAclDefaulted = 32;
	case DiscretionaryAclUntrusted = 64;
	case ServerSecurity = 128;
	case DiscretionaryAclAutoInheritRequired = 256;
	case SystemAclAutoInheritRequired = 512;
	case DiscretionaryAclAutoInherited = 1024;
	case SystemAclAutoInherited = 2048;
	case DiscretionaryAclProtected = 4096;
	case SystemAclProtected = 8192;
	case RMControlValid = 16384;
	case SelfRelative = 32768;
}
