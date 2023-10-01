<?php
namespace Avalonia\X11;
/**
 */
enum NotifyDetail implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NotifyAncestor = 0;
	case NotifyVirtual = 1;
	case NotifyInferior = 2;
	case NotifyNonlinear = 3;
	case NotifyNonlinearVirtual = 4;
	case NotifyPointer = 5;
	case NotifyPointerRoot = 6;
	case NotifyDetailNone = 7;
}
