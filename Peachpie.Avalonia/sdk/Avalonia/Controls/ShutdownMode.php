<?php
namespace Avalonia\Controls;
/**
 */
enum ShutdownMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case OnLastWindowClose = 0;
	case OnMainWindowClose = 1;
	case OnExplicitShutdown = 2;
}
