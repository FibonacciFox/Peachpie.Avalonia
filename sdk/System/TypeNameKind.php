<?php
namespace System;
/**
 */
enum TypeNameKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Name = 0;
	case ToString = 1;
	case FullName = 2;
}
