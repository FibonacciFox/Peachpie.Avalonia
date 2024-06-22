<?php
namespace System\Diagnostics;
enum DebuggingModes
{

	
	case None = '0';
	case Default = '1';
	case DisableOptimizations = '256';
	case IgnoreSymbolStoreSequencePoints = '2';
	case EnableEditAndContinue = '4';

}