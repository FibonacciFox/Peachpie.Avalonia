<?php
namespace Avalonia\Input\TextInput;
/**
 */
enum TextInputContentType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Normal = 0;
	case Alpha = 1;
	case Digits = 2;
	case Pin = 3;
	case Number = 4;
	case Email = 5;
	case Url = 6;
	case Name = 7;
	case Password = 8;
	case Social = 9;
	case Search = 10;
}
