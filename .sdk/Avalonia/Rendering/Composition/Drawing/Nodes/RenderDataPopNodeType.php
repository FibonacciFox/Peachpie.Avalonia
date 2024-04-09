<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
enum RenderDataPopNodeType
{
	
	case Transform = '0';
	case Clip = '1';
	case GeometryClip = '2';
	case Opacity = '3';
	case OpacityMask = '4';

}