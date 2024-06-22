<?php
namespace Avalonia\Media;
enum PushedStateType
{

	
	case None = '0';
	case Matrix = '1';
	case Opacity = '2';
	case Clip = '3';
	case MatrixContainer = '4';
	case GeometryClip = '5';
	case OpacityMask = '6';

}