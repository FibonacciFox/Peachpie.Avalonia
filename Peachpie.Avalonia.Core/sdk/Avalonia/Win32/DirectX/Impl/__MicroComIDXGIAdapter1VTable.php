<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIAdapter1VTableMethodsOverride
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
class __MicroComIDXGIAdapter1VTable extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIAdapterVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_ADAPTER_DESC1* $pDesc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDesc1($this, $pDesc){}
	/**
	 * @uses __MicroComIDXGIAdapter1VTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGIAdapter1VTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
