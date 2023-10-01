<?php
namespace Avalonia\Markup\Parsers;
/**
 */
enum State implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Start = 0;
	case Middle = 1;
	case Colon = 2;
	case Class = 3;
	case Name = 4;
	case CanHaveType = 5;
	case Traversal = 6;
	case TypeName = 7;
	case Property = 8;
	case AttachedProperty = 9;
	case Template = 10;
	case End = 11;
}
