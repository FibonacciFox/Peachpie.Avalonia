<?php
namespace System\Threading;
enum StateOrTransition
{
	
	case Warmup = '0';
	case Initializing = '1';
	case RandomMove = '2';
	case ClimbingMove = '3';
	case ChangePoint = '4';
	case Stabilizing = '5';
	case Starvation = '6';
	case ThreadTimedOut = '7';
	case CooperativeBlocking = '8';

}