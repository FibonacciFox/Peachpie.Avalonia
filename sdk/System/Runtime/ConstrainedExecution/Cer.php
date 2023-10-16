<?php
namespace System\Runtime\ConstrainedExecution;
/**
 */
enum Cer implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case MayFail = 1;
	case Success = 2;
}
