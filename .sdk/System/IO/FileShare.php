<?php
namespace System\IO;
enum FileShare
{

	
	case None = '0';
	case Read = '1';
	case Write = '2';
	case ReadWrite = '3';
	case Delete = '4';
	case Inheritable = '16';

}