<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum TrustLevel implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case BaseTrust = 0;
	case PartialTrust = 1;
	case FullTrust = 2;
}
