<?php
namespace System;
enum State
{

	
	case Escaped = '0';
	case NotEscaped = '1';
	case StartOfToken = '2';
	case EndOfLine = '3';

}