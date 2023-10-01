<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGISwapChain1VTableMethodsOverride
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
class __MicroComIDXGISwapChain1VTable extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGISwapChainVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDesc1($this, $pDesc){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_FULLSCREEN_DESC* $pDesc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFullscreenDesc($this, $pDesc){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr* $pHwnd
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetHwnd($this, $pHwnd){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $refiid
	 * @param \System\Void** $ppUnk
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCoreWindow($this, $refiid, $ppUnk){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $SyncInterval
	 * @param \System\UInt16 $PresentFlags
	 * @param \Avalonia\Win32\DirectX\DXGI_PRESENT_PARAMETERS* $pPresentParameters
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Present1($this, $SyncInterval, $PresentFlags, $pPresentParameters){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsTemporaryMonoSupported($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppRestrictToOutput
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRestrictToOutput($this, $ppRestrictToOutput){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_RGBA* $pColor
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetBackgroundColor($this, $pColor){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_RGBA* $pColor
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetBackgroundColor($this, $pColor){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_ROTATION $Rotation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetRotation($this, $Rotation){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_ROTATION* $pRotation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRotation($this, $pRotation){}
	/**
	 * @uses __MicroComIDXGISwapChain1VTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGISwapChain1VTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
