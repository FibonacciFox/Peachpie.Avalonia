<?php
namespace Avalonia\Win32;
/**
 */
class OffscreenParentWindow extends \System\Object
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Handle;
	/**
	 * @return \System\IntPtr
	 */
	public static function get_Handle(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateParentWindow(){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $msg
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParentWndProc($hWnd, $msg, $wParam, $lParam){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
