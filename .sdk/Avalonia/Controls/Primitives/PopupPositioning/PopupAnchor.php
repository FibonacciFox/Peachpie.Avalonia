<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
enum PopupAnchor
{

	
	case None = '0';
	case Top = '1';
	case Bottom = '2';
	case Left = '4';
	case Right = '8';
	case TopLeft = '5';
	case TopRight = '9';
	case BottomLeft = '6';
	case BottomRight = '10';
	case VerticalMask = '3';
	case HorizontalMask = '12';
	case AllMask = '15';

}