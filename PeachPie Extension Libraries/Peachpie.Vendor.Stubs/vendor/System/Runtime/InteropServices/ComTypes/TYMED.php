<?php
namespace System\Runtime\InteropServices\ComTypes;
enum TYMED
{
	
	case TYMED_HGLOBAL = '1';
	case TYMED_FILE = '2';
	case TYMED_ISTREAM = '4';
	case TYMED_ISTORAGE = '8';
	case TYMED_GDI = '16';
	case TYMED_MFPICT = '32';
	case TYMED_ENHMF = '64';
	case TYMED_NULL = '0';

}