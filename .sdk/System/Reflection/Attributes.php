<?php
namespace System\Reflection;
enum Attributes
{
	
	case ComposedOfAllVirtualMethods = '1';
	case ComposedOfAllPrivateMethods = '2';
	case ComposedOfNoPublicMembers = '4';
	case ComposedOfNoStaticMembers = '8';

}