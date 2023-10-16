<?php
namespace System\Runtime\InteropServices\ObjectiveC;
/**
 */
enum MessageSendFunction implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case MsgSend = 0;
	case MsgSendFpret = 1;
	case MsgSendStret = 2;
	case MsgSendSuper = 3;
	case MsgSendSuperStret = 4;
}
