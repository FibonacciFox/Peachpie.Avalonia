<?php
namespace System;
enum CheckValueStatus
{
	
	case Success = '0';
	case ArgumentException = '1';
	case NotSupported_ByRefLike = '2';

}