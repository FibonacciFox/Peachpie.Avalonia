<?php
namespace System\Threading;
enum OpenExistingResult
{
	
	case Success = '0';
	case NameNotFound = '1';
	case PathNotFound = '2';
	case NameInvalid = '3';

}