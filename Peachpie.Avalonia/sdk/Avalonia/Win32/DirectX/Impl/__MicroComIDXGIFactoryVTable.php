<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIFactoryVTableMethodsOverride
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
class __MicroComIDXGIFactoryVTable extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIObjectVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $Adapter
	 * @param \System\Void* $ppAdapter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumAdapters($this, $Adapter, $ppAdapter){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $WindowHandle
	 * @param \System\UInt16 $Flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MakeWindowAssociation($this, $WindowHandle, $Flags){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr* $pWindowHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetWindowAssociation($this, $pWindowHandle){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pDevice
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC* $pDesc
	 * @param \System\Void** $ppSwapChain
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateSwapChain($this, $pDevice, $pDesc, $ppSwapChain){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $Module
	 * @param \System\Void** $ppAdapter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateSoftwareAdapter($this, $Module, $ppAdapter){}
	/**
	 * @uses __MicroComIDXGIFactoryVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGIFactoryVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
