<?php
namespace System\Reflection;
enum ResourceLocation
{
	
	case ContainedInAnotherAssembly = '2';
	case ContainedInManifestFile = '4';
	case Embedded = '1';

}