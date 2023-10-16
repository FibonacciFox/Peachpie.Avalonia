<?php
namespace System\Diagnostics;
/**
 */
enum DebuggerBrowsableState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Never = 0;
	case Collapsed = 2;
	case RootHidden = 3;
}
