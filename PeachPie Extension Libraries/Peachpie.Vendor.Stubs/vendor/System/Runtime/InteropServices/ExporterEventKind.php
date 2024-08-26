<?php
namespace System\Runtime\InteropServices;
enum ExporterEventKind
{
	
	case NOTIF_TYPECONVERTED = '0';
	case NOTIF_CONVERTWARNING = '1';
	case ERROR_REFTOINVALIDASSEMBLY = '2';

}