<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositor6VTableMethodsOverride
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
class __MicroComICompositor6VTable extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateGeometricClip($this, $result){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $geometry
	 * @param \System\Void** $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateGeometricClipWithGeometry($this, $geometry, $result){}
	/**
	 * @uses __MicroComICompositor6VTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComICompositor6VTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
