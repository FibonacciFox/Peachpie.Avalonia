<?php
namespace Avalonia\Input;
enum KeyboardNavigationMode
{

	
	case Continue = '0';
	case Cycle = '1';
	case Contained = '2';
	case Once = '3';
	case None = '4';
	case Local = '5';

}