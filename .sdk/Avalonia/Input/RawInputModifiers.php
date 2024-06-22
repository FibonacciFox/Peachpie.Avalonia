<?php
namespace Avalonia\Input;
enum RawInputModifiers
{

	
	case None = '0';
	case Alt = '1';
	case Control = '2';
	case Shift = '4';
	case Meta = '8';
	case LeftMouseButton = '16';
	case RightMouseButton = '32';
	case MiddleMouseButton = '64';
	case XButton1MouseButton = '128';
	case XButton2MouseButton = '256';
	case KeyboardMask = '15';
	case PenInverted = '512';
	case PenEraser = '1024';
	case PenBarrelButton = '2048';

}