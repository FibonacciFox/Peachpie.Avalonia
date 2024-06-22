<?php
namespace Avalonia\Media\Transformation;
enum OperationType
{

	
	case Translate = '0';
	case Rotate = '1';
	case Scale = '2';
	case Skew = '3';
	case Matrix = '4';
	case Identity = '5';

}