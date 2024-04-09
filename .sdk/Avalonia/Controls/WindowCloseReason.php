<?php
namespace Avalonia\Controls;
enum WindowCloseReason
{
	
	case Undefined = '0';
	case WindowClosing = '1';
	case OwnerWindowClosing = '2';
	case ApplicationShutdown = '3';
	case OSShutdown = '4';

}