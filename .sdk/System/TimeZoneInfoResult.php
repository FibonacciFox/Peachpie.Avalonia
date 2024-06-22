<?php
namespace System;
enum TimeZoneInfoResult
{

	
	case Success = '0';
	case TimeZoneNotFoundException = '1';
	case InvalidTimeZoneException = '2';
	case SecurityException = '3';

}