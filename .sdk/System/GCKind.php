<?php
namespace System;
enum GCKind
{
	
	case Any = '0';
	case Ephemeral = '1';
	case FullBlocking = '2';
	case Background = '3';

}