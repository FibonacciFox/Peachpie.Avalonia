<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
enum AnimationIterationBehavior implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Count = 0;
	case Forever = 1;
}
