<?php
namespace System\Runtime\Serialization;
/**
 */
enum StreamingContextStates implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CrossProcess = 1;
	case CrossMachine = 2;
	case File = 4;
	case Persistence = 8;
	case Remoting = 16;
	case Other = 32;
	case Clone = 64;
	case CrossAppDomain = 128;
	case All = 255;
}
