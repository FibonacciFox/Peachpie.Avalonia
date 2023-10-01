<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComID3D11Device1ProxyMethodsOverride
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
class __MicroComID3D11Device1Proxy extends \Avalonia\Win32\DirectX\Impl\__MicroComID3D11DeviceProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\ID3D11Device,
	\Avalonia\Win32\DirectX\ID3D11Device1
{
	/**
	 * @param \System\Void** $ppImmediateContext
	 * @return \System\Void|void
	 */
	public  function GetImmediateContext1($ppImmediateContext){}
	/**
	 * @param \System\UInt16 $ContextFlags
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateDeferredContext1($ContextFlags){}
	/**
	 * @param \System\Void* $pBlendStateDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateBlendState1($pBlendStateDesc){}
	/**
	 * @param \System\Void* $pRasterizerDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateRasterizerState1($pRasterizerDesc){}
	/**
	 * @param \System\UInt16 $Flags
	 * @param \System\Void* $pFeatureLevels
	 * @param \System\UInt16 $FeatureLevels
	 * @param \System\UInt16 $SDKVersion
	 * @param \System\Guid* $EmulatedInterface
	 * @param \System\Void* $pChosenFeatureLevel
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateDeviceContextState($Flags, $pFeatureLevels, $FeatureLevels, $SDKVersion, $EmulatedInterface, $pChosenFeatureLevel){}
	/**
	 * @param \System\IntPtr $hResource
	 * @param \System\Guid* $ReturnedInterface
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function OpenSharedResource1($hResource, $ReturnedInterface){}
	/**
	 * @param \System\UInt16* $lpName
	 * @param \System\Int32|int $dwDesiredAccess
	 * @param \System\Guid* $returnedInterface
	 * @param \System\Void** $ppResource
	 * @return \System\Void|void
	 */
	public  function OpenSharedResourceByName($lpName, $dwDesiredAccess, $returnedInterface, $ppResource){}
	/**
	 * @uses __MicroComID3D11Device1ProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComID3D11Device1ProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComID3D11Device1ProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComID3D11Device1ProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
