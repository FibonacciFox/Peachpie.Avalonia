<?php

enum SysLogPriority
{
	
	case LOG_EMERG = '0';
	case LOG_ALERT = '1';
	case LOG_CRIT = '2';
	case LOG_ERR = '3';
	case LOG_WARNING = '4';
	case LOG_NOTICE = '5';
	case LOG_INFO = '6';
	case LOG_DEBUG = '7';

}