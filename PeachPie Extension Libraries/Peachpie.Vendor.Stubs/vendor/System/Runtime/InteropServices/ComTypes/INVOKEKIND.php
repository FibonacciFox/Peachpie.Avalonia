<?php
namespace System\Runtime\InteropServices\ComTypes;
enum INVOKEKIND
{
	
	case INVOKE_FUNC = '1';
	case INVOKE_PROPERTYGET = '2';
	case INVOKE_PROPERTYPUT = '4';
	case INVOKE_PROPERTYPUTREF = '8';

}