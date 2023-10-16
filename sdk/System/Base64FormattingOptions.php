<?php
namespace System;
/**
 */
enum Base64FormattingOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case InsertLineBreaks = 1;
}
