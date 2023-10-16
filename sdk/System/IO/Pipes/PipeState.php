<?php
namespace System\IO\Pipes;
/**
 */
enum PipeState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case WaitingToConnect = 0;
	case Connected = 1;
	case Broken = 2;
	case Disconnected = 3;
	case Closed = 4;
}
