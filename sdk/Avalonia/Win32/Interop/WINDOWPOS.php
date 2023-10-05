<?php
namespace Avalonia\Win32\Interop;
/**
 */
class WINDOWPOS extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hwnd;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hwndInsertAfter;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $x;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $y;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $cx;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $cy;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $flags;
}
