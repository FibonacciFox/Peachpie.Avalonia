<?php
namespace System;
/**
 */
enum SpecialFolderOption implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Create = 16384;
	case DoNotVerify = 32768;
}
