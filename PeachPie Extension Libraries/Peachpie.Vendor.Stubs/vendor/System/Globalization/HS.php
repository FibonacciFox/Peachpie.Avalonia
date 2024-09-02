<?php
namespace System\Globalization;
enum HS
{
	
	case _err = '-1';
	case Start = '0';
	case S400 = '1';
	case S400_400 = '2';
	case S400_X00 = '3';
	case S400_X0 = '4';
	case X00_DQ = '5';
	case S400_X00_X0 = '6';
	case X0_DQ = '7';
	case X = '8';
	case X0 = '9';
	case X00 = '10';
	case S400_DQ = '11';
	case S400_400_DQ = '12';
	case S400_400_100 = '13';
	case S9 = '14';
	case X00_S9 = '15';
	case S9_DQ = '16';
	case END = '100';

}