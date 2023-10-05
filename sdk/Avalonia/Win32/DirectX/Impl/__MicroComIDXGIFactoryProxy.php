<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIFactoryProxyMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class __MicroComIDXGIFactoryProxy extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIObjectProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\IDXGIObject,
	\Avalonia\Win32\DirectX\IDXGIFactory
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $WindowAssociation;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $NativePointer;
	/**
	 * @var \System\Void***
	 * @property
	 */
	public readonly $PPV;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDisposed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $OwnsHandle;
	/**
	 * @param \System\UInt16 $Adapter
	 * @param \System\Void* $ppAdapter
	 * @return \System\Int32|int
	 */
	public  function EnumAdapters($Adapter, $ppAdapter){}
	/**
	 * @param \System\IntPtr $WindowHandle
	 * @param \System\UInt16 $Flags
	 * @return \System\Void|void
	 */
	public  function MakeWindowAssociation($WindowHandle, $Flags){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_WindowAssociation(){}
	/**
	 * @param \MicroCom\Runtime\IUnknown $pDevice
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC* $pDesc
	 * @return \Avalonia\Win32\DirectX\IDXGISwapChain
	 */
	public  function CreateSwapChain($pDevice, $pDesc){}
	/**
	 * @param \System\Void* $Module
	 * @return \Avalonia\Win32\DirectX\IDXGIAdapter
	 */
	public  function CreateSoftwareAdapter($Module){}
	/**
	 * @uses __MicroComIDXGIFactoryProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDXGIFactoryProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDXGIFactoryProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDXGIFactoryProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
