<?php
namespace System\Reflection\Emit;
/**
 */
enum PEFileKinds implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Dll = 1;
	case ConsoleApplication = 2;
	case WindowApplication = 3;
}
