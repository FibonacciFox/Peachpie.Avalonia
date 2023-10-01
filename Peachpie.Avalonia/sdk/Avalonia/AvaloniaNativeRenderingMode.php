<?php
namespace Avalonia;
/**
 */
enum AvaloniaNativeRenderingMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case OpenGl = 1;
	case Software = 2;
	case Metal = 3;
}
