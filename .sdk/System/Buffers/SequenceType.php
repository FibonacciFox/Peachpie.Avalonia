<?php
namespace System\Buffers;
enum SequenceType
{

	
	case MultiSegment = '0';
	case Array = '1';
	case MemoryManager = '2';
	case String = '3';
	case Empty = '4';

}