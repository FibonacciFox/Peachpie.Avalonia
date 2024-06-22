<?php
namespace Avalonia\Controls\Remote\Server;
enum FrameStatus
{

	
	case NotRendered = '0';
	case Rendered = '1';
	case CopiedToMessage = '2';

}