<?php
namespace System\Reflection;
enum AssemblyNameFlags
{

	
	case None = '0';
	case PublicKey = '1';
	case EnableJITcompileOptimizer = '16384';
	case EnableJITcompileTracking = '32768';
	case Retargetable = '256';

}