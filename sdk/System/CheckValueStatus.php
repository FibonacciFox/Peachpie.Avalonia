<?php
namespace System;
/**
 */
enum CheckValueStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Success = 0;
	case ArgumentException = 1;
	case NotSupported_ByRefLike = 2;
}
