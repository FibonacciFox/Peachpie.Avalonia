<?php
namespace System;
enum GCNotificationStatus
{
	
	case Succeeded = '0';
	case Failed = '1';
	case Canceled = '2';
	case Timeout = '3';
	case NotApplicable = '4';

}