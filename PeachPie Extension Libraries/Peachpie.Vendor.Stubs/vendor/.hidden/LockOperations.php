<?php

enum LockOperations
{
	
	case LOCK_SH = '1';
	case LOCK_EX = '2';
	case LOCK_NB = '4';
	case LOCK_UN = '8';

}