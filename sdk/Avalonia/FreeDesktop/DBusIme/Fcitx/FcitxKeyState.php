<?php
namespace Avalonia\FreeDesktop\DBusIme\Fcitx;
/**
 */
enum FcitxKeyState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case FcitxKeyState_None = 0;
	case FcitxKeyState_Shift = 1;
	case FcitxKeyState_CapsLock = 2;
	case FcitxKeyState_Ctrl = 4;
	case FcitxKeyState_Alt = 5;
	case FcitxKeyState_Alt_Shift = 8;
	case FcitxKeyState_Ctrl_Shift = 9;
	case FcitxKeyState_Ctrl_Alt = 12;
	case FcitxKeyState_Ctrl_Alt_Shift = 13;
	case FcitxKeyState_NumLock = 16;
	case FcitxKeyState_Super = 64;
	case FcitxKeyState_ScrollLock = 128;
	case FcitxKeyState_MousePressed = 256;
	case FcitxKeyState_HandledMask = 16777216;
	case FcitxKeyState_IgnoredMask = 33554432;
	case FcitxKeyState_Super2 = 67108864;
	case FcitxKeyState_Hyper = 134217728;
	case FcitxKeyState_Meta = 268435456;
	case FcitxKeyState_UsedMask = 1543512063;
}
