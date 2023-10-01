<?php
namespace Avalonia\FreeDesktop\DBusIme\IBus;
/**
 */
enum IBusCapability implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CapPreeditText = 1;
	case CapAuxiliaryText = 2;
	case CapLookupTable = 4;
	case CapFocus = 8;
	case CapProperty = 16;
	case CapSurroundingText = 32;
}
