<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIVisual2VTableMethodsOverride
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
class __MicroComIVisual2VTable extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetParentForTransform($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetParentForTransform($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Numerics\Vector3* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRelativeOffsetAdjustment($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Numerics\Vector3 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetRelativeOffsetAdjustment($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Numerics\Vector2* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRelativeSizeAdjustment($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Numerics\Vector2 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetRelativeSizeAdjustment($this, $value){}
	/**
	 * @uses __MicroComIVisual2VTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIVisual2VTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
