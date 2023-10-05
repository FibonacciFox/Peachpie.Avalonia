<?php
namespace Avalonia\Win32\Input;
/**
 */
class WindowsMousePointer extends \Avalonia\Input\Pointer implements 
	\Avalonia\Input\IPointer,
	\System\IDisposable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Id;
	/**
	 * @var \Avalonia\Input\IInputElement
	 * @property
	 */
	public readonly $Captured;
	/**
	 * @var \Avalonia\Input\PointerType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPrimary;
	/**
	 * @param \Avalonia\Win32\Input\WindowsMousePointer& $pointer
	 * @return \Avalonia\Win32\Input\WindowsMousePointer
	 */
	public static function CreatePointer($pointer){}
}
