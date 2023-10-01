<?php
namespace Avalonia\Win32\OpenGl;
/**
 */
class WglGdiResourceManager extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Worker(){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $msg
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WndProc($hWnd, $msg, $wParam, $lParam){}
	/**
	 * @return \System\IntPtr
	 */
	public static function CreateOffscreenWindow(){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\IntPtr
	 */
	public static function GetDC($hWnd){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\IntPtr $hDC
	 * @return \System\Void|void
	 */
	public static function ReleaseDC($hWnd, $hDC){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\Void|void
	 */
	public static function DestroyWindow($hWnd){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
