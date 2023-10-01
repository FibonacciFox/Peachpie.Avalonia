<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum ProviderOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ClientSideProvider = 1;
	case ServerSideProvider = 2;
	case NonClientAreaProvider = 4;
	case OverrideProvider = 8;
	case ProviderOwnsSetFocus = 16;
	case UseComThreading = 32;
}
