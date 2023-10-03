<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionDrawingSurfaceInteropProxyMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class __MicroComICompositionDrawingSurfaceInteropProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\ICompositionDrawingSurfaceInterop
{
	/**
	 * @param \Avalonia\Win32\Interop\RECT* $updateRect
	 * @param \System\Guid* $iid
	 * @param \System\Void** $updateObject
	 * @return \Avalonia\Win32\Interop\POINT
	 */
	public  function BeginDraw($updateRect, $iid, $updateObject){}
	/**
	 * @return \System\Void|void
	 */
	public  function EndDraw(){}
	/**
	 * @param \Avalonia\Win32\Interop\POINT $sizePixels
	 * @return \System\Void|void
	 */
	public  function Resize($sizePixels){}
	/**
	 * @param \Avalonia\Win32\Interop\RECT* $scrollRect
	 * @param \Avalonia\Win32\Interop\RECT* $clipRect
	 * @param \System\Int32|int $offsetX
	 * @param \System\Int32|int $offsetY
	 * @return \System\Void|void
	 */
	public  function Scroll($scrollRect, $clipRect, $offsetX, $offsetY){}
	/**
	 * @return \System\Void|void
	 */
	public  function ResumeDraw(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SuspendDraw(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComICompositionDrawingSurfaceInteropProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositionDrawingSurfaceInteropProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositionDrawingSurfaceInteropProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositionDrawingSurfaceInteropProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
