<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
enum BidiPairedBracketType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Close = 1;
	case Open = 2;
}
