<?php
namespace Avalonia\Input\TextInput;
/**
 */
enum TextInputReturnKeyType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case Return = 1;
	case Done = 2;
	case Go = 3;
	case Send = 4;
	case Search = 5;
	case Next = 6;
	case Previous = 7;
}
