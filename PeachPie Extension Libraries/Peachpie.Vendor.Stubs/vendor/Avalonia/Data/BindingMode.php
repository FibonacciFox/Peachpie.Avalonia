<?php
namespace Avalonia\Data;
enum BindingMode
{
	
	case Default = '0';
	case OneWay = '1';
	case TwoWay = '2';
	case OneTime = '3';
	case OneWayToSource = '4';

}