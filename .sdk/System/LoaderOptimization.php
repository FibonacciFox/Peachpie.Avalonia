<?php
namespace System;
enum LoaderOptimization
{

	
	case DisallowBindings = '4';
	case DomainMask = '3';
	case MultiDomain = '2';
	case MultiDomainHost = '3';
	case NotSpecified = '0';
	case SingleDomain = '1';

}