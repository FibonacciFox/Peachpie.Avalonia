<?php

enum OpenFlags
{
	
	case O_RDONLY = '0';
	case O_WRONLY = '1';
	case O_RDWR = '2';
	case O_CLOEXEC = '16';
	case O_CREAT = '32';
	case O_EXCL = '64';
	case O_TRUNC = '128';
	case O_SYNC = '256';

}