<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIFactory2VTableMethodsOverride
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
class __MicroComIDXGIFactory2VTable extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIFactory1VTable
{
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsWindowedStereoEnabled($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pDevice
	 * @param \System\IntPtr $hWnd
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_FULLSCREEN_DESC* $pFullscreenDesc
	 * @param \System\Void* $pRestrictToOutput
	 * @param \System\Void** $ppSwapChain
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateSwapChainForHwnd($this, $pDevice, $hWnd, $pDesc, $pFullscreenDesc, $pRestrictToOutput, $ppSwapChain){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pDevice
	 * @param \System\Void* $pWindow
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @param \System\Void* $pRestrictToOutput
	 * @param \System\Void** $ppSwapChain
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateSwapChainForCoreWindow($this, $pDevice, $pWindow, $pDesc, $pRestrictToOutput, $ppSwapChain){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $hResource
	 * @param \System\UInt64* $pLuid
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSharedResourceAdapterLuid($this, $hResource, $pLuid){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $WindowHandle
	 * @param \System\UInt16 $wMsg
	 * @param \System\Int32* $pdwCookie
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RegisterStereoStatusWindow($this, $WindowHandle, $wMsg, $pdwCookie){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $hEvent
	 * @param \System\Int32* $pdwCookie
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RegisterStereoStatusEvent($this, $hEvent, $pdwCookie){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $dwCookie
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UnregisterStereoStatus($this, $dwCookie){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $WindowHandle
	 * @param \System\UInt16 $wMsg
	 * @param \System\Int32* $pdwCookie
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RegisterOcclusionStatusWindow($this, $WindowHandle, $wMsg, $pdwCookie){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $hEvent
	 * @param \System\Int32* $pdwCookie
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RegisterOcclusionStatusEvent($this, $hEvent, $pdwCookie){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $dwCookie
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UnregisterOcclusionStatus($this, $dwCookie){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pDevice
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @param \System\Void* $pRestrictToOutput
	 * @param \System\Void** $ppSwapChain
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateSwapChainForComposition($this, $pDevice, $pDesc, $pRestrictToOutput, $ppSwapChain){}
	/**
	 * @uses __MicroComIDXGIFactory2VTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGIFactory2VTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
