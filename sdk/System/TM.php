<?php
namespace System;
/**
 */
enum TM implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NotSet = 0;
	case AM = 1;
	case PM = -1;
}
