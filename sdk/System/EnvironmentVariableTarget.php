<?php
namespace System;
/**
 */
enum EnvironmentVariableTarget implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Process = 0;
	case User = 1;
	case Machine = 2;
}
