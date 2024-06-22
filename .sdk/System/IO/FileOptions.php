<?php
namespace System\IO;
enum FileOptions
{

	
	case None = '0';
	case WriteThrough = '-2147483648';
	case Asynchronous = '1073741824';
	case RandomAccess = '268435456';
	case DeleteOnClose = '67108864';
	case SequentialScan = '134217728';
	case Encrypted = '16384';

}