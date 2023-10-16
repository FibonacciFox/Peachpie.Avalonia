<?php
namespace System;
/**
 */
enum DS implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case BEGIN = 0;
	case N = 1;
	case NN = 2;
	case D_Nd = 3;
	case D_NN = 4;
	case D_NNd = 5;
	case D_M = 6;
	case D_MN = 7;
	case D_NM = 8;
	case D_MNd = 9;
	case D_NDS = 10;
	case D_Y = 11;
	case D_YN = 12;
	case D_YNd = 13;
	case D_YM = 14;
	case D_YMd = 15;
	case D_S = 16;
	case T_S = 17;
	case T_Nt = 18;
	case T_NNt = 19;
	case ERROR = 20;
	case DX_NN = 21;
	case DX_NNN = 22;
	case DX_MN = 23;
	case DX_NM = 24;
	case DX_MNN = 25;
	case DX_DS = 26;
	case DX_DSN = 27;
	case DX_NDS = 28;
	case DX_NNDS = 29;
	case DX_YNN = 30;
	case DX_YMN = 31;
	case DX_YN = 32;
	case DX_YM = 33;
	case TX_N = 34;
	case TX_NN = 35;
	case TX_NNN = 36;
	case TX_TS = 37;
	case DX_NNY = 38;
}
