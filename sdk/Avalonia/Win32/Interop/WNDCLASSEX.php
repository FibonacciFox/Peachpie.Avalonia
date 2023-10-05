<?php
namespace Avalonia\Win32\Interop;
/**
 */
class WNDCLASSEX extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $cbSize;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $style;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+WndProc
	 * @field
	 */
	public $lpfnWndProc;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $cbClsExtra;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $cbWndExtra;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hInstance;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hIcon;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hCursor;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hbrBackground;
	/**
	 * @var \System\String
	 * @field
	 */
	public $lpszMenuName;
	/**
	 * @var \System\String
	 * @field
	 */
	public $lpszClassName;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hIconSm;
}
