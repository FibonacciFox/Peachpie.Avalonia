<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIFactory1VTableMethodsOverride
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
class __MicroComIDXGIFactory1VTable extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIFactoryVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $Adapter
	 * @param \System\Void** $ppAdapter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumAdapters1($this, $Adapter, $ppAdapter){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCurrent($this){}
	/**
	 * @uses __MicroComIDXGIFactory1VTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGIFactory1VTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
