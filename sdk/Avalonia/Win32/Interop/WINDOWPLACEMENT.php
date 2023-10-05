<?php
namespace Avalonia\Win32\Interop;
/**
 */
class WINDOWPLACEMENT extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Length;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Flags;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+ShowWindowCommand
	 * @field
	 */
	public $ShowCmd;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+POINT
	 * @field
	 */
	public $MinPosition;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+POINT
	 * @field
	 */
	public $MaxPosition;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+RECT
	 * @field
	 */
	public $NormalPosition;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+WINDOWPLACEMENT
	 * @property
	 */
	public readonly $Default;
	/**
	 * @return \Avalonia\Win32\Interop\WINDOWPLACEMENT
	 */
	public static function get_Default(){}
}
