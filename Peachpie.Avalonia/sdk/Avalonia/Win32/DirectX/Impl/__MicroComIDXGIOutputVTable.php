<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIOutputVTableMethodsOverride
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
class __MicroComIDXGIOutputVTable extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIObjectVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_OUTPUT_DESC* $pDesc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDesc($this, $pDesc){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $EnumFormat
	 * @param \System\UInt16 $Flags
	 * @param \System\UInt16* $pNumModes
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pDesc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDisplayModeList($this, $EnumFormat, $Flags, $pNumModes, $pDesc){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pModeToMatch
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pClosestMatch
	 * @param \System\Void* $pConcernedDevice
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindClosestMatchingMode($this, $pModeToMatch, $pClosestMatch, $pConcernedDevice){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WaitForVBlank($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pDevice
	 * @param \System\Int32|int $Exclusive
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TakeOwnership($this, $pDevice, $Exclusive){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReleaseOwnership($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pGammaCaps
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGammaControlCapabilities($this, $pGammaCaps){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pArray
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetGammaControl($this, $pArray){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pArray
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGammaControl($this, $pArray){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pScanoutSurface
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetDisplaySurface($this, $pScanoutSurface){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pDestination
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDisplaySurfaceData($this, $pDestination){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_FRAME_STATISTICS* $pStats
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFrameStatistics($this, $pStats){}
	/**
	 * @uses __MicroComIDXGIOutputVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGIOutputVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
