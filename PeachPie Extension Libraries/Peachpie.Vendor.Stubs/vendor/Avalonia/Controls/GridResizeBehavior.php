<?php
namespace Avalonia\Controls;
enum GridResizeBehavior
{
	
	case BasedOnAlignment = '0';
	case CurrentAndNext = '1';
	case PreviousAndCurrent = '2';
	case PreviousAndNext = '3';

}