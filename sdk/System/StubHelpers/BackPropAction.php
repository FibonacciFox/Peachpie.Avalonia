<?php
namespace System\StubHelpers;
/**
 */
enum BackPropAction implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Array = 1;
	case Layout = 2;
	case StringBuilderAnsi = 3;
	case StringBuilderUnicode = 4;
}
