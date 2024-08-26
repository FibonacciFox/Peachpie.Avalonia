<?php
namespace System\Buffers\Text;
enum ComponentParseResult
{
	
	case NoMoreData = '0';
	case Colon = '1';
	case Period = '2';
	case ParseFailure = '3';

}