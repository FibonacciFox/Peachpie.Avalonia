<?php
namespace System\Runtime\InteropServices;
enum ComInterfaceType
{

	
	case InterfaceIsDual = '0';
	case InterfaceIsIUnknown = '1';
	case InterfaceIsIDispatch = '2';
	case InterfaceIsIInspectable = '3';

}