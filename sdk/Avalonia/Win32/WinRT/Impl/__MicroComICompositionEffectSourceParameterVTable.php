<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionEffectSourceParameterVTableMethodsOverride
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
class __MicroComICompositionEffectSourceParameterVTable extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetName($this, $value){}
	/**
	 * @uses __MicroComICompositionEffectSourceParameterVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComICompositionEffectSourceParameterVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
