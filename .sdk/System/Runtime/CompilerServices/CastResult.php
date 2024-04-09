<?php
namespace System\Runtime\CompilerServices;
enum CastResult
{
	
	case CannotCast = '0';
	case CanCast = '1';
	case MaybeCast = '2';

}