<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum HRESULT implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case S_FALSE = 0;
	case S_OK = 1;
	case E_INVALIDARG = 2147500033;
	case E_OUTOFMEMORY = 2147549183;
	case E_NOTIMPL = 2147942414;
	case E_UNEXPECTED = 2147942487;
	case E_CANCELLED = 2147943623;
}
