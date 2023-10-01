<?php
namespace Avalonia\Win32\DirectX;
/**
 */
class DirectXUnmanagedMethods extends \System\Object
{
	/**
	 * @param \System\Guid& $riid
	 * @param \System\Void*& $ppFactory
	 * @return \System\Void|void
	 */
	protected static function CreateDXGIFactory($riid, $ppFactory){}
	/**
	 * @param \System\Guid& $riid
	 * @param \System\Void*& $ppFactory
	 * @return \System\Void|void
	 */
	protected static function CreateDXGIFactory1($riid, $ppFactory){}
	/**
	 * @param \Avalonia\Win32\DirectX\HANDLE $hMonitor
	 * @param \System\IntPtr $lpmi
	 * @return \System\Boolean
	 */
	protected static function GetMonitorInfoW($hMonitor, $lpmi){}
	/**
	 * @param \System\UInt16* $lpszDeviceName
	 * @param \System\UInt32 $iModeNum
	 * @param \Avalonia\Win32\DirectX\DEVMODEW* $lpDevMode
	 * @return \System\Boolean
	 */
	protected static function EnumDisplaySettingsW($lpszDeviceName, $iModeNum, $lpDevMode){}
	/**
	 * @param \System\IntPtr $adapter
	 * @param \Avalonia\Win32\DirectX\D3D_DRIVER_TYPE $DriverType
	 * @param \System\IntPtr $Software
	 * @param \System\UInt32 $Flags
	 * @param \Avalonia\Win32\DirectX\D3D_FEATURE_LEVEL[] $pFeatureLevels
	 * @param \System\UInt32 $FeatureLevels
	 * @param \System\UInt32 $SDKVersion
	 * @param \System\IntPtr& $ppDevice
	 * @param \Avalonia\Win32\DirectX\D3D_FEATURE_LEVEL& $pFeatureLevel
	 * @param \System\IntPtr* $ppImmediateContext
	 * @return \System\Void|void
	 */
	public static function D3D11CreateDevice($adapter, $DriverType, $Software, $Flags, $pFeatureLevels, $FeatureLevels, $SDKVersion, $ppDevice, $pFeatureLevel, $ppImmediateContext){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
