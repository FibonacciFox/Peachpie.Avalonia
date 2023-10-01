<?php
namespace Avalonia\Controls\Remote\Server;
/**
 */
enum FrameStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NotRendered = 0;
	case Rendered = 1;
	case CopiedToMessage = 2;
}
