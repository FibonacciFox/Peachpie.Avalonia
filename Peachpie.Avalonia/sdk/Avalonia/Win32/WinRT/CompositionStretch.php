<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum CompositionStretch implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Fill = 1;
	case Uniform = 2;
	case UniformToFill = 3;
}
