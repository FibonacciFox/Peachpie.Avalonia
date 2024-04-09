<?php
namespace System\Threading;
enum LazyThreadSafetyMode
{
	
	case None = '0';
	case PublicationOnly = '1';
	case ExecutionAndPublication = '2';

}