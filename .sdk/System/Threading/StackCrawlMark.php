<?php
namespace System\Threading;
enum StackCrawlMark
{
	
	case LookForMe = '0';
	case LookForMyCaller = '1';
	case LookForMyCallersCaller = '2';
	case LookForThread = '3';

}