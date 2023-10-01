<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum CompositionEffectFactoryLoadStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Success = 0;
	case EffectTooComplex = 1;
	case Pending = 2;
	case Other = -1;
}
