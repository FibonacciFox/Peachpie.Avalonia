<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGISwapChainVTableMethodsOverride
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
class __MicroComIDXGISwapChainVTable extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIDeviceSubObjectVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $SyncInterval
	 * @param \System\UInt16 $Flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Present($this, $SyncInterval, $Flags){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $Buffer
	 * @param \System\Guid* $riid
	 * @param \System\Void** $ppSurface
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetBuffer($this, $Buffer, $riid, $ppSurface){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $Fullscreen
	 * @param \System\Void* $pTarget
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetFullscreenState($this, $Fullscreen, $pTarget){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32* $pFullscreen
	 * @param \System\Void** $ppTarget
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFullscreenState($this, $pFullscreen, $ppTarget){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC* $pDesc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDesc($this, $pDesc){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $BufferCount
	 * @param \System\UInt16 $Width
	 * @param \System\UInt16 $Height
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $NewFormat
	 * @param \System\UInt16 $SwapChainFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResizeBuffers($this, $BufferCount, $Width, $Height, $NewFormat, $SwapChainFlags){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pNewTargetParameters
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResizeTarget($this, $pNewTargetParameters){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppOutput
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetContainingOutput($this, $ppOutput){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_FRAME_STATISTICS* $pStats
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFrameStatistics($this, $pStats){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16* $pLastPresentCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLastPresentCount($this, $pLastPresentCount){}
	/**
	 * @uses __MicroComIDXGISwapChainVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGISwapChainVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
