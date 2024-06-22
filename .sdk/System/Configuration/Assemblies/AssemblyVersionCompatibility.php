<?php
namespace System\Configuration\Assemblies;
enum AssemblyVersionCompatibility
{

	
	case SameMachine = '1';
	case SameProcess = '2';
	case SameDomain = '3';

}