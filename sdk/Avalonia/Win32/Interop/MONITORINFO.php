<?php
namespace Avalonia\Win32\Interop;
/**
 */
class MONITORINFO extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $cbSize;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+RECT
	 * @field
	 */
	public $rcMonitor;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+RECT
	 * @field
	 */
	public $rcWork;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $dwFlags;
	/**
	 * @return \Avalonia\Win32\Interop\MONITORINFO
	 */
	public static function Create(){}
}
