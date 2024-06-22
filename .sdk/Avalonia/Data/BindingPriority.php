<?php
namespace Avalonia\Data;
enum BindingPriority
{

	
	case Animation = '-1';
	case LocalValue = '0';
	case StyleTrigger = '1';
	case Template = '2';
	case Style = '3';
	case Inherited = '4';
	case Unset = '2147483647';
	case TemplatedParent = '2';

}