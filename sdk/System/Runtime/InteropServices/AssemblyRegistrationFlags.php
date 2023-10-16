<?php
namespace System\Runtime\InteropServices;
/**
 */
enum AssemblyRegistrationFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case SetCodeBase = 1;
}
