<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionGraphicsDeviceVTableMethodsOverride
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
class __MicroComICompositionGraphicsDeviceVTable extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\SIZE_F $sizePixels
	 * @param \Avalonia\Win32\WinRT\DirectXPixelFormat $pixelFormat
	 * @param \Avalonia\Win32\WinRT\DirectXAlphaMode $alphaMode
	 * @param \System\Void** $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDrawingSurface($this, $sizePixels, $pixelFormat, $alphaMode, $result){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $handler
	 * @param \System\Void* $token
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddRenderingDeviceReplaced($this, $handler, $token){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $token
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RemoveRenderingDeviceReplaced($this, $token){}
	/**
	 * @uses __MicroComICompositionGraphicsDeviceVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComICompositionGraphicsDeviceVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
