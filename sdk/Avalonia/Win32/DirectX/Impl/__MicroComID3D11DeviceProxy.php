<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComID3D11DeviceProxyMethodsOverride
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
class __MicroComID3D11DeviceProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\ID3D11Device
{
	/**
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateBuffer($pDesc, $pInitialData){}
	/**
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateTexture1D($pDesc, $pInitialData){}
	/**
	 * @param \Avalonia\Win32\DirectX\D3D11_TEXTURE2D_DESC* $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @return \Avalonia\Win32\DirectX\ID3D11Texture2D
	 */
	public  function CreateTexture2D($pDesc, $pInitialData){}
	/**
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateTexture3D($pDesc, $pInitialData){}
	/**
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateShaderResourceView($pResource, $pDesc){}
	/**
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateUnorderedAccessView($pResource, $pDesc){}
	/**
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateRenderTargetView($pResource, $pDesc){}
	/**
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateDepthStencilView($pResource, $pDesc){}
	/**
	 * @param \System\IntPtr $pInputElementDescs
	 * @param \System\UInt16 $NumElements
	 * @param \System\Void* $pShaderBytecodeWithInputSignature
	 * @param \System\IntPtr $BytecodeLength
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateInputLayout($pInputElementDescs, $NumElements, $pShaderBytecodeWithInputSignature, $BytecodeLength){}
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateVertexShader($pShaderBytecode, $BytecodeLength, $pClassLinkage){}
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateGeometryShader($pShaderBytecode, $BytecodeLength, $pClassLinkage){}
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pSODeclaration
	 * @param \System\UInt16 $NumEntries
	 * @param \System\UInt16* $pBufferStrides
	 * @param \System\UInt16 $NumStrides
	 * @param \System\UInt16 $RasterizedStream
	 * @param \System\IntPtr $pClassLinkage
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateGeometryShaderWithStreamOutput($pShaderBytecode, $BytecodeLength, $pSODeclaration, $NumEntries, $pBufferStrides, $NumStrides, $RasterizedStream, $pClassLinkage){}
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreatePixelShader($pShaderBytecode, $BytecodeLength, $pClassLinkage){}
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateHullShader($pShaderBytecode, $BytecodeLength, $pClassLinkage){}
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateDomainShader($pShaderBytecode, $BytecodeLength, $pClassLinkage){}
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateComputeShader($pShaderBytecode, $BytecodeLength, $pClassLinkage){}
	/**
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateClassLinkage(){}
	/**
	 * @param \System\IntPtr $pBlendStateDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateBlendState($pBlendStateDesc){}
	/**
	 * @param \System\IntPtr $pDepthStencilDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateDepthStencilState($pDepthStencilDesc){}
	/**
	 * @param \System\IntPtr $pRasterizerDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateRasterizerState($pRasterizerDesc){}
	/**
	 * @param \System\IntPtr $pSamplerDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateSamplerState($pSamplerDesc){}
	/**
	 * @param \System\IntPtr $pQueryDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateQuery($pQueryDesc){}
	/**
	 * @param \System\IntPtr $pPredicateDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreatePredicate($pPredicateDesc){}
	/**
	 * @param \System\IntPtr $pCounterDesc
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateCounter($pCounterDesc){}
	/**
	 * @param \System\UInt16 $ContextFlags
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function CreateDeferredContext($ContextFlags){}
	/**
	 * @param \System\IntPtr $hResource
	 * @param \System\Guid* $ReturnedInterface
	 * @return \MicroCom\Runtime\IUnknown
	 */
	public  function OpenSharedResource($hResource, $ReturnedInterface){}
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $Format
	 * @param \System\UInt16* $pFormatSupport
	 * @return \System\Void|void
	 */
	public  function CheckFormatSupport($Format, $pFormatSupport){}
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $Format
	 * @param \System\UInt16 $SampleCount
	 * @param \System\UInt16* $pNumQualityLevels
	 * @return \System\Void|void
	 */
	public  function CheckMultisampleQualityLevels($Format, $SampleCount, $pNumQualityLevels){}
	/**
	 * @param \System\IntPtr $pCounterInfo
	 * @return \System\Void|void
	 */
	public  function CheckCounterInfo($pCounterInfo){}
	/**
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pType
	 * @param \System\IntPtr $pActiveCounters
	 * @param \System\IntPtr $szName
	 * @param \System\UInt16* $pNameLength
	 * @param \System\IntPtr $szUnits
	 * @param \System\UInt16* $pUnitsLength
	 * @param \System\IntPtr $szDescription
	 * @param \System\UInt16* $pDescriptionLength
	 * @return \System\Void|void
	 */
	public  function CheckCounter($pDesc, $pType, $pActiveCounters, $szName, $pNameLength, $szUnits, $pUnitsLength, $szDescription, $pDescriptionLength){}
	/**
	 * @param \Avalonia\Win32\DirectX\D3D11_FEATURE $Feature
	 * @param \System\Void* $pFeatureSupportData
	 * @param \System\UInt16 $FeatureSupportDataSize
	 * @return \System\Void|void
	 */
	public  function CheckFeatureSupport($Feature, $pFeatureSupportData, $FeatureSupportDataSize){}
	/**
	 * @param \System\Guid* $guid
	 * @param \System\UInt16* $pDataSize
	 * @param \System\Void* $pData
	 * @return \System\Void|void
	 */
	public  function GetPrivateData($guid, $pDataSize, $pData){}
	/**
	 * @param \System\Guid* $guid
	 * @param \System\UInt16 $DataSize
	 * @param \System\IntPtr* $pData
	 * @return \System\Void|void
	 */
	public  function SetPrivateData($guid, $DataSize, $pData){}
	/**
	 * @param \System\Guid* $guid
	 * @param \MicroCom\Runtime\IUnknown $pData
	 * @return \System\Void|void
	 */
	public  function SetPrivateDataInterface($guid, $pData){}
	/**
	 * @return \Avalonia\Win32\DirectX\D3D_FEATURE_LEVEL
	 */
	public  function get_FeatureLevel(){}
	/**
	 * @return \System\UInt16
	 */
	public  function get_CreationFlags(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_DeviceRemovedReason(){}
	/**
	 * @param \System\IntPtr* $ppImmediateContext
	 * @return \System\Void|void
	 */
	public  function GetImmediateContext($ppImmediateContext){}
	/**
	 * @param \System\UInt16 $RaiseFlags
	 * @return \System\Void|void
	 */
	public  function SetExceptionMode($RaiseFlags){}
	/**
	 * @return \System\UInt16
	 */
	public  function get_ExceptionMode(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComID3D11DeviceProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComID3D11DeviceProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComID3D11DeviceProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComID3D11DeviceProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
