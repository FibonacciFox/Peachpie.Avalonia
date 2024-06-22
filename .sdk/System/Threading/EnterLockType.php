<?php
namespace System\Threading;
enum EnterLockType
{

	
	case Read = '0';
	case UpgradeableRead = '1';
	case Write = '2';
	case UpgradeToWrite = '3';

}