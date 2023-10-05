<?php
namespace Avalonia\Win32\Interop;
/**
 */
class MSG extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hwnd;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $message;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $wParam;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $lParam;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $time;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+POINT
	 * @field
	 */
	public $pt;
}
