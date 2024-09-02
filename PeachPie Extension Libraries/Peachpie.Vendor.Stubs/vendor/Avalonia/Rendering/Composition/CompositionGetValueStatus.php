<?php
namespace Avalonia\Rendering\Composition;
enum CompositionGetValueStatus
{
	
	case Succeeded = '0';
	case TypeMismatch = '1';
	case NotFound = '2';

}