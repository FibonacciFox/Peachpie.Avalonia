<?php
namespace Avalonia\Rendering\Composition;
/**
 */
enum CompositionGradientExtendMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Clamp = 0;
	case Wrap = 1;
	case Mirror = 2;
}
