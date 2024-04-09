<?php
namespace System\Reflection;
enum NullabilityState
{
	
	case Unknown = '0';
	case NotNull = '1';
	case Nullable = '2';

}