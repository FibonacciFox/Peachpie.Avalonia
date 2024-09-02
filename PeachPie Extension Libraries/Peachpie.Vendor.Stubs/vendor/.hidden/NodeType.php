<?php

enum NodeType
{
	
	case DT_UNKNOWN = '0';
	case DT_FIFO = '1';
	case DT_CHR = '2';
	case DT_DIR = '4';
	case DT_BLK = '6';
	case DT_REG = '8';
	case DT_LNK = '10';
	case DT_SOCK = '12';
	case DT_WHT = '14';

}