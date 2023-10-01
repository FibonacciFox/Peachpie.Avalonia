<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionDrawingSurfaceInteropVTableMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_1($d){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_2($m){}
}
/**
 */
class __MicroComICompositionDrawingSurfaceInteropVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\RECT* $updateRect
	 * @param \System\Guid* $iid
	 * @param \System\Void** $updateObject
	 * @param \Avalonia\Win32\Interop\POINT* $updateOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BeginDraw($this, $updateRect, $iid, $updateObject, $updateOffset){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EndDraw($this){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\POINT $sizePixels
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Resize($this, $sizePixels){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\RECT* $scrollRect
	 * @param \Avalonia\Win32\Interop\RECT* $clipRect
	 * @param \System\Int32|int $offsetX
	 * @param \System\Int32|int $offsetY
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Scroll($this, $scrollRect, $clipRect, $offsetX, $offsetY){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResumeDraw($this){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SuspendDraw($this){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComICompositionDrawingSurfaceInteropVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComICompositionDrawingSurfaceInteropVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
