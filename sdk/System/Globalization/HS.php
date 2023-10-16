<?php
namespace System\Globalization;
/**
 */
enum HS implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case _err = 0;
	case Start = 1;
	case S400 = 2;
	case S400_400 = 3;
	case S400_X00 = 4;
	case S400_X0 = 5;
	case X00_DQ = 6;
	case S400_X00_X0 = 7;
	case X0_DQ = 8;
	case X = 9;
	case X0 = 10;
	case X00 = 11;
	case S400_DQ = 12;
	case S400_400_DQ = 13;
	case S400_400_100 = 14;
	case S9 = 15;
	case X00_S9 = 16;
	case S9_DQ = 100;
	case END = -1;
}
