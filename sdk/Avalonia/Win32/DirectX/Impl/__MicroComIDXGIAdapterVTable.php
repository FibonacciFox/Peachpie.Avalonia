<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIAdapterVTableMethodsOverride
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
class __MicroComIDXGIAdapterVTable extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIObjectVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $Output
	 * @param \System\Void* $ppOutput
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumOutputs($this, $Output, $ppOutput){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_ADAPTER_DESC* $pDesc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDesc($this, $pDesc){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $InterfaceName
	 * @param \System\UInt64* $pUMDVersion
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckInterfaceSupport($this, $InterfaceName, $pUMDVersion){}
	/**
	 * @uses __MicroComIDXGIAdapterVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGIAdapterVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
