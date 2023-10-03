<?php
namespace Avalonia\FreeDesktop\DBusIme\Fcitx;
/**
 */
enum FcitxKeyEventType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case FCITX_PRESS_KEY = 0;
	case FCITX_RELEASE_KEY = 1;
}
