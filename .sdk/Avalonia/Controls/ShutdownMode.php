<?php
namespace Avalonia\Controls;
enum ShutdownMode
{

	
	case OnLastWindowClose = '0';
	case OnMainWindowClose = '1';
	case OnExplicitShutdown = '2';

}