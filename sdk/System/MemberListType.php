<?php
namespace System;
/**
 */
enum MemberListType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case All = 0;
	case CaseSensitive = 1;
	case CaseInsensitive = 2;
	case HandleToInfo = 3;
}
