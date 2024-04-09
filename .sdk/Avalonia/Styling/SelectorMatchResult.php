<?php
namespace Avalonia\Styling;
enum SelectorMatchResult
{
	
	case NeverThisType = '0';
	case NeverThisInstance = '1';
	case Sometimes = '2';
	case AlwaysThisInstance = '3';
	case AlwaysThisType = '4';

}