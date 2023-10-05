<?php
namespace Avalonia\Win32\Interop;
/**
 */
class PAINTSTRUCT extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $hdc;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $fErase;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+RECT
	 * @field
	 */
	public $rcPaint;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $fRestore;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $fIncUpdate;
	/**
	 * @var \System\Byte[]
	 * @field
	 */
	public $rgbReserved;
}
