<?php
namespace System\IO\Pipes;
/**
 */
enum PipeAccessRights implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ReadData = 1;
	case WriteData = 2;
	case ReadAttributes = 4;
	case WriteAttributes = 8;
	case ReadExtendedAttributes = 16;
	case WriteExtendedAttributes = 128;
	case CreateNewInstance = 256;
	case Delete = 274;
	case ReadPermissions = 65536;
	case ChangePermissions = 131072;
	case TakeOwnership = 131209;
	case Synchronize = 131483;
	case FullControl = 262144;
	case Read = 524288;
	case Write = 1048576;
	case ReadWrite = 2032031;
	case AccessSystemSecurity = 16777216;
}
