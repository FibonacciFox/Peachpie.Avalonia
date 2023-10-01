<?php
namespace Avalonia\DesignerSupport\Remote\HtmlTransport;
/**
 */
enum FrameType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Continue = 0;
	case Text = 1;
	case Binary = 2;
	case Close = 8;
	case Ping = 9;
	case Pong = 10;
}
