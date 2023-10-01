<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionDrawingSurfaceVTableMethodsOverride
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
class __MicroComICompositionDrawingSurfaceVTable extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\WinRT\DirectXAlphaMode* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAlphaMode($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\WinRT\DirectXPixelFormat* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPixelFormat($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\SIZE_F* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSize($this, $value){}
	/**
	 * @uses __MicroComICompositionDrawingSurfaceVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComICompositionDrawingSurfaceVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
