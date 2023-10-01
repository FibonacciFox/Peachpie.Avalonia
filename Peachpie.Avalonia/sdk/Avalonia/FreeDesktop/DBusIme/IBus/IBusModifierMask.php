<?php
namespace Avalonia\FreeDesktop\DBusIme\IBus;
/**
 */
enum IBusModifierMask implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ShiftMask = 1;
	case LockMask = 2;
	case ControlMask = 4;
	case Mod1Mask = 8;
	case Mod2Mask = 16;
	case Mod3Mask = 32;
	case Mod4Mask = 64;
	case Mod5Mask = 128;
	case Button1Mask = 256;
	case Button2Mask = 512;
	case Button3Mask = 1024;
	case Button4Mask = 2048;
	case Button5Mask = 4096;
	case HandledMask = 16777216;
	case ForwardMask = 33554432;
	case IgnoredMask = 33554432;
	case SuperMask = 67108864;
	case HyperMask = 134217728;
	case MetaMask = 268435456;
	case ReleaseMask = 1073741824;
	case ModifierMask = 1543512063;
}
