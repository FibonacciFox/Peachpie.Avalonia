<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIDeviceProxyMethodsOverride
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
class __MicroComIDXGIDeviceProxy extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIObjectProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\IDXGIObject,
	\Avalonia\Win32\DirectX\IDXGIDevice
{
	/**
	 * @var \Avalonia\Win32\DirectX\IDXGIAdapter
	 * @property
	 */
	public readonly $Adapter;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $GPUThreadPriority;
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
	 * @return \Avalonia\Win32\DirectX\IDXGIAdapter
	 */
	public  function get_Adapter(){}
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_SURFACE_DESC* $pDesc
	 * @param \System\UInt16 $NumSurfaces
	 * @param \System\UInt32 $Usage
	 * @param \System\Void** $pSharedResource
	 * @return \Avalonia\Win32\DirectX\IDXGISurface
	 */
	public  function CreateSurface($pDesc, $NumSurfaces, $Usage, $pSharedResource){}
	/**
	 * @param \MicroCom\Runtime\IUnknown $ppResources
	 * @param \Avalonia\Win32\DirectX\DXGI_RESIDENCY* $pResidencyStatus
	 * @param \System\UInt16 $NumResources
	 * @return \System\Void|void
	 */
	public  function QueryResourceResidency($ppResources, $pResidencyStatus, $NumResources){}
	/**
	 * @param \System\Int32|int $Priority
	 * @return \System\Void|void
	 */
	public  function SetGPUThreadPriority($Priority){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_GPUThreadPriority(){}
	/**
	 * @uses __MicroComIDXGIDeviceProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDXGIDeviceProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDXGIDeviceProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDXGIDeviceProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
