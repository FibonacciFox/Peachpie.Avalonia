<?php
namespace Avalonia\Rendering\Composition;
/**
 */
enum CompositionStretch implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Fill = 1;
}
