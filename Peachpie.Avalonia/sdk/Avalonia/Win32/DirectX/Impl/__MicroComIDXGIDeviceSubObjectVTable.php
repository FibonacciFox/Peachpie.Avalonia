<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIDeviceSubObjectVTableMethodsOverride
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
class __MicroComIDXGIDeviceSubObjectVTable extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIObjectVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $riid
	 * @param \System\Void** $ppDevice
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDevice($this, $riid, $ppDevice){}
	/**
	 * @uses __MicroComIDXGIDeviceSubObjectVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGIDeviceSubObjectVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
