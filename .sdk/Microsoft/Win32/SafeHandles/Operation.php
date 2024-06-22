<?php
namespace Microsoft\Win32\SafeHandles;
enum Operation
{

	
	case None = '0';
	case Read = '1';
	case Write = '2';
	case ReadScatter = '3';
	case WriteGather = '4';

}