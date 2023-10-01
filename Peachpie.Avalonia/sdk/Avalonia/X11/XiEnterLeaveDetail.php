<?php
namespace Avalonia\X11;
/**
 */
enum XiEnterLeaveDetail implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case XINotifyAncestor = 0;
	case XINotifyVirtual = 1;
	case XINotifyInferior = 2;
	case XINotifyNonlinear = 3;
	case XINotifyNonlinearVirtual = 4;
	case XINotifyPointer = 5;
	case XINotifyPointerRoot = 6;
	case XINotifyDetailNone = 7;
}
