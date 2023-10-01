<?php
namespace Avalonia\Win32\Input;
/**
 */
class WindowsMousePointer extends \Avalonia\Input\Pointer implements 
	\Avalonia\Input\IPointer,
	\System\IDisposable
{
	/**
	 * @param \Avalonia\Win32\Input\WindowsMousePointer& $pointer
	 * @return \Avalonia\Win32\Input\WindowsMousePointer
	 */
	public static function CreatePointer($pointer){}
}
