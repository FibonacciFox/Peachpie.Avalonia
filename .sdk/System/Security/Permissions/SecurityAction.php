<?php
namespace System\Security\Permissions;
enum SecurityAction
{
	
	case Assert = '3';
	case Demand = '2';
	case Deny = '4';
	case InheritanceDemand = '7';
	case LinkDemand = '6';
	case PermitOnly = '5';
	case RequestMinimum = '8';
	case RequestOptional = '9';
	case RequestRefuse = '10';

}