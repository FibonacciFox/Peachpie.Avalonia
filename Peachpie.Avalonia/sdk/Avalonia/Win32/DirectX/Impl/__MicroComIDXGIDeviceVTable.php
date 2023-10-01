<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIDeviceVTableMethodsOverride
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
class __MicroComIDXGIDeviceVTable extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIObjectVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $pAdapter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAdapter($this, $pAdapter){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_SURFACE_DESC* $pDesc
	 * @param \System\UInt16 $NumSurfaces
	 * @param \System\UInt32 $Usage
	 * @param \System\Void** $pSharedResource
	 * @param \System\Void** $ppSurface
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateSurface($this, $pDesc, $NumSurfaces, $Usage, $pSharedResource, $ppSurface){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $ppResources
	 * @param \Avalonia\Win32\DirectX\DXGI_RESIDENCY* $pResidencyStatus
	 * @param \System\UInt16 $NumResources
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function QueryResourceResidency($this, $ppResources, $pResidencyStatus, $NumResources){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $Priority
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetGPUThreadPriority($this, $Priority){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32* $pPriority
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGPUThreadPriority($this, $pPriority){}
	/**
	 * @uses __MicroComIDXGIDeviceVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGIDeviceVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
