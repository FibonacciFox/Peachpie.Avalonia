<?php
namespace System\Runtime\InteropServices;
enum RegistrationConnectionType
{
	
	case SingleUse = '0';
	case MultipleUse = '1';
	case MultiSeparate = '2';
	case Suspended = '4';
	case Surrogate = '8';

}