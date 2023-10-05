<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIOutputProxyMethodsOverride
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
class __MicroComIDXGIOutputProxy extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIObjectProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\IDXGIObject,
	\Avalonia\Win32\DirectX\IDXGIOutput
{
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_OUTPUT_DESC
	 * @property
	 */
	public readonly $Desc;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_FRAME_STATISTICS
	 * @property
	 */
	public readonly $FrameStatistics;
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
	 * @return \Avalonia\Win32\DirectX\DXGI_OUTPUT_DESC
	 */
	public  function get_Desc(){}
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $EnumFormat
	 * @param \System\UInt16 $Flags
	 * @param \System\UInt16* $pNumModes
	 * @return \Avalonia\Win32\DirectX\DXGI_MODE_DESC
	 */
	public  function GetDisplayModeList($EnumFormat, $Flags, $pNumModes){}
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pModeToMatch
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pClosestMatch
	 * @param \MicroCom\Runtime\IUnknown $pConcernedDevice
	 * @return \System\Void|void
	 */
	public  function FindClosestMatchingMode($pModeToMatch, $pClosestMatch, $pConcernedDevice){}
	/**
	 * @return \System\Void|void
	 */
	public  function WaitForVBlank(){}
	/**
	 * @param \MicroCom\Runtime\IUnknown $pDevice
	 * @param \System\Int32|int $Exclusive
	 * @return \System\Void|void
	 */
	public  function TakeOwnership($pDevice, $Exclusive){}
	/**
	 * @return \System\Void|void
	 */
	public  function ReleaseOwnership(){}
	/**
	 * @param \System\IntPtr $pGammaCaps
	 * @return \System\Void|void
	 */
	public  function GetGammaControlCapabilities($pGammaCaps){}
	/**
	 * @param \System\Void* $pArray
	 * @return \System\Void|void
	 */
	public  function SetGammaControl($pArray){}
	/**
	 * @param \System\IntPtr $pArray
	 * @return \System\Void|void
	 */
	public  function GetGammaControl($pArray){}
	/**
	 * @param \Avalonia\Win32\DirectX\IDXGISurface $pScanoutSurface
	 * @return \System\Void|void
	 */
	public  function SetDisplaySurface($pScanoutSurface){}
	/**
	 * @param \Avalonia\Win32\DirectX\IDXGISurface $pDestination
	 * @return \System\Void|void
	 */
	public  function GetDisplaySurfaceData($pDestination){}
	/**
	 * @return \Avalonia\Win32\DirectX\DXGI_FRAME_STATISTICS
	 */
	public  function get_FrameStatistics(){}
	/**
	 * @uses __MicroComIDXGIOutputProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDXGIOutputProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDXGIOutputProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDXGIOutputProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
