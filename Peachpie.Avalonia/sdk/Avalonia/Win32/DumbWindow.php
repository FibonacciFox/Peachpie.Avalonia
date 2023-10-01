<?php
namespace Avalonia\Win32;
/**
 */
class DumbWindow extends \System\Object implements 
	\System\IDisposable,
	\Avalonia\Controls\Platform\INativeControlHostDestroyableControlHandle,
	\Avalonia\Platform\IPlatformHandle
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_HandleDescriptor(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Destroy(){}
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReleaseUnmanagedResources(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
