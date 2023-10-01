<?php
namespace Avalonia\Win32;
/**
 */
class FramebufferManager extends \System\Object implements 
	\Avalonia\Controls\Platform\Surfaces\IFramebufferPlatformSurface,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public  function Lock(){}
	/**
	 * @return \Avalonia\Controls\Platform\Surfaces\IFramebufferRenderTarget
	 */
	public  function CreateFramebufferRenderTarget(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DrawAndUnlock(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCurrentDpi(){}
	/**
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AllocateFramebufferData($width, $height){}
	/**
	 * @param \Avalonia\Win32\FramebufferData $framebufferData
	 * @param \System\IntPtr $hDC
	 * @param \System\Int32|int $destX
	 * @param \System\Int32|int $destY
	 * @param \System\Int32|int $srcX
	 * @param \System\Int32|int $srcY
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DrawToDevice($framebufferData, $hDC, $destX, $destY, $srcX, $srcY, $width, $height){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \Avalonia\Win32\FramebufferData $framebufferData
	 * @param \System\Int32|int $destX
	 * @param \System\Int32|int $destY
	 * @param \System\Int32|int $srcX
	 * @param \System\Int32|int $srcY
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DrawToWindow($hWnd, $framebufferData, $destX, $destY, $srcX, $srcY, $width, $height){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
