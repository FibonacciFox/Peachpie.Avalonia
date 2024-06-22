<?php
namespace System\Runtime\InteropServices;
enum CallingConvention
{

	
	case Winapi = '1';
	case Cdecl = '2';
	case StdCall = '3';
	case ThisCall = '4';
	case FastCall = '5';

}