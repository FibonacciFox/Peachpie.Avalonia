<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIGraphicsEffectVTableMethodsOverride
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
class __MicroComIGraphicsEffectVTable extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr* $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetName($this, $name){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetName($this, $name){}
	/**
	 * @uses __MicroComIGraphicsEffectVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIGraphicsEffectVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
