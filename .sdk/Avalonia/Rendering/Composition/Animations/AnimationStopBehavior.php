<?php
namespace Avalonia\Rendering\Composition\Animations;
enum AnimationStopBehavior
{

	
	case LeaveCurrentValue = '0';
	case SetToInitialValue = '1';
	case SetToFinalValue = '2';

}