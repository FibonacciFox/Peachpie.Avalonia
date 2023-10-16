<?php
namespace System;
/**
 */
enum ConsoleColor implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Black = 0;
	case DarkBlue = 1;
	case DarkGreen = 2;
	case DarkCyan = 3;
	case DarkRed = 4;
	case DarkMagenta = 5;
	case DarkYellow = 6;
	case Gray = 7;
	case DarkGray = 8;
	case Blue = 9;
	case Green = 10;
	case Cyan = 11;
	case Red = 12;
	case Magenta = 13;
	case Yellow = 14;
	case White = 15;
}
