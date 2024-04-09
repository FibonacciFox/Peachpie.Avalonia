<?php
namespace System\Reflection;
enum ExceptionHandlingClauseOptions
{
	
	case Clause = '0';
	case Filter = '1';
	case Finally = '2';
	case Fault = '4';

}