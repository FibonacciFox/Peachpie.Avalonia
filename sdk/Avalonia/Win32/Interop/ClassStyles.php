<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum ClassStyles implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CS_VREDRAW = 1;
	case CS_HREDRAW = 2;
	case CS_DBLCLKS = 8;
	case CS_OWNDC = 32;
	case CS_CLASSDC = 64;
	case CS_PARENTDC = 128;
	case CS_NOCLOSE = 512;
	case CS_SAVEBITS = 2048;
	case CS_BYTEALIGNCLIENT = 4096;
	case CS_BYTEALIGNWINDOW = 8192;
	case CS_GLOBALCLASS = 16384;
	case CS_IME = 65536;
	case CS_DROPSHADOW = 131072;
}
