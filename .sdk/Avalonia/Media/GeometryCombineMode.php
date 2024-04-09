<?php
namespace Avalonia\Media;
enum GeometryCombineMode
{
	
	case Union = '0';
	case Intersect = '1';
	case Xor = '2';
	case Exclude = '3';

}