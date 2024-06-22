<?php

enum FileAdvice
{

	
	case POSIX_FADV_NORMAL = '0';
	case POSIX_FADV_RANDOM = '1';
	case POSIX_FADV_SEQUENTIAL = '2';
	case POSIX_FADV_WILLNEED = '3';
	case POSIX_FADV_DONTNEED = '4';
	case POSIX_FADV_NOREUSE = '5';

}