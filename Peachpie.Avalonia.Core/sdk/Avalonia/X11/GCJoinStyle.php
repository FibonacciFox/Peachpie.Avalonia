<?php
namespace Avalonia\X11;
/**
 */
enum GCJoinStyle implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case JoinMiter = 0;
	case JoinRound = 1;
	case JoinBevel = 2;
}
