<?php
namespace System\Runtime\InteropServices;
enum PosixSignal
{
	
	case SIGHUP = '-1';
	case SIGINT = '-2';
	case SIGQUIT = '-3';
	case SIGTERM = '-4';
	case SIGCHLD = '-5';
	case SIGCONT = '-6';
	case SIGWINCH = '-7';
	case SIGTTIN = '-8';
	case SIGTTOU = '-9';
	case SIGTSTP = '-10';

}