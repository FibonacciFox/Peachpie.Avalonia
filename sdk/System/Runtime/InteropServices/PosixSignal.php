<?php
namespace System\Runtime\InteropServices;
/**
 */
enum PosixSignal implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SIGHUP = -10;
	case SIGINT = -9;
	case SIGQUIT = -8;
	case SIGTERM = -7;
	case SIGCHLD = -6;
	case SIGCONT = -5;
	case SIGWINCH = -4;
	case SIGTTIN = -3;
	case SIGTTOU = -2;
	case SIGTSTP = -1;
}
