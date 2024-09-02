<?php

enum ResultCode
{
	
	case Success = '0';
	case UnknownError = '1';
	case InsufficientBuffer = '2';
	case OutOfMemory = '3';

}