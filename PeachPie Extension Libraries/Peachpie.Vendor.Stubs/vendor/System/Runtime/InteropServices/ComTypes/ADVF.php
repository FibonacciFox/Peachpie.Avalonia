<?php
namespace System\Runtime\InteropServices\ComTypes;
enum ADVF
{
	
	case ADVF_NODATA = '1';
	case ADVF_PRIMEFIRST = '2';
	case ADVF_ONLYONCE = '4';
	case ADVF_DATAONSTOP = '64';
	case ADVFCACHE_NOHANDLER = '8';
	case ADVFCACHE_FORCEBUILTIN = '16';
	case ADVFCACHE_ONSAVE = '32';

}