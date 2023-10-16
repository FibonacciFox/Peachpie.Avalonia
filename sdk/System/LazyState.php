<?php
namespace System;
/**
 */
enum LazyState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NoneViaConstructor = 0;
	case NoneViaFactory = 1;
	case NoneException = 2;
	case PublicationOnlyViaConstructor = 3;
	case PublicationOnlyViaFactory = 4;
	case PublicationOnlyWait = 5;
	case PublicationOnlyException = 6;
	case ExecutionAndPublicationViaConstructor = 7;
	case ExecutionAndPublicationViaFactory = 8;
	case ExecutionAndPublicationException = 9;
}
