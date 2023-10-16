<?php
namespace System;
/**
 */
enum DateTimeKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unspecified = 0;
	case Utc = 1;
	case Local = 2;
}
