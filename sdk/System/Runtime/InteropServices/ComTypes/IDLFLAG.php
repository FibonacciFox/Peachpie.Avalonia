<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum IDLFLAG implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case IDLFLAG_NONE = 0;
	case IDLFLAG_FIN = 1;
	case IDLFLAG_FOUT = 2;
	case IDLFLAG_FLCID = 4;
	case IDLFLAG_FRETVAL = 8;
}
