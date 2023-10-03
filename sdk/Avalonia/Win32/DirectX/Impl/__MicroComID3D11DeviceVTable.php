<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComID3D11DeviceVTableMethodsOverride
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
class __MicroComID3D11DeviceVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @param \System\Void** $ppBuffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateBuffer($this, $pDesc, $pInitialData, $ppBuffer){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @param \System\Void** $ppTexture1D
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateTexture1D($this, $pDesc, $pInitialData, $ppTexture1D){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\D3D11_TEXTURE2D_DESC* $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @param \System\Void** $ppTexture2D
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateTexture2D($this, $pDesc, $pInitialData, $ppTexture2D){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @param \System\Void** $ppTexture3D
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateTexture3D($this, $pDesc, $pInitialData, $ppTexture3D){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 * @param \System\Void** $ppSRView
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateShaderResourceView($this, $pResource, $pDesc, $ppSRView){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 * @param \System\Void** $ppUAView
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateUnorderedAccessView($this, $pResource, $pDesc, $ppUAView){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 * @param \System\Void** $ppRTView
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateRenderTargetView($this, $pResource, $pDesc, $ppRTView){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 * @param \System\Void** $ppDepthStencilView
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDepthStencilView($this, $pResource, $pDesc, $ppDepthStencilView){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pInputElementDescs
	 * @param \System\UInt16 $NumElements
	 * @param \System\Void* $pShaderBytecodeWithInputSignature
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\Void** $ppInputLayout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateInputLayout($this, $pInputElementDescs, $NumElements, $pShaderBytecodeWithInputSignature, $BytecodeLength, $ppInputLayout){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @param \System\Void** $ppVertexShader
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateVertexShader($this, $pShaderBytecode, $BytecodeLength, $pClassLinkage, $ppVertexShader){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @param \System\Void** $ppGeometryShader
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateGeometryShader($this, $pShaderBytecode, $BytecodeLength, $pClassLinkage, $ppGeometryShader){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pSODeclaration
	 * @param \System\UInt16 $NumEntries
	 * @param \System\UInt16* $pBufferStrides
	 * @param \System\UInt16 $NumStrides
	 * @param \System\UInt16 $RasterizedStream
	 * @param \System\IntPtr $pClassLinkage
	 * @param \System\Void** $ppGeometryShader
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateGeometryShaderWithStreamOutput($this, $pShaderBytecode, $BytecodeLength, $pSODeclaration, $NumEntries, $pBufferStrides, $NumStrides, $RasterizedStream, $pClassLinkage, $ppGeometryShader){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @param \System\Void** $ppPixelShader
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreatePixelShader($this, $pShaderBytecode, $BytecodeLength, $pClassLinkage, $ppPixelShader){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @param \System\Void** $ppHullShader
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateHullShader($this, $pShaderBytecode, $BytecodeLength, $pClassLinkage, $ppHullShader){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @param \System\Void** $ppDomainShader
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDomainShader($this, $pShaderBytecode, $BytecodeLength, $pClassLinkage, $ppDomainShader){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @param \System\Void** $ppComputeShader
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateComputeShader($this, $pShaderBytecode, $BytecodeLength, $pClassLinkage, $ppComputeShader){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppLinkage
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateClassLinkage($this, $ppLinkage){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pBlendStateDesc
	 * @param \System\Void** $ppBlendState
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateBlendState($this, $pBlendStateDesc, $ppBlendState){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDepthStencilDesc
	 * @param \System\Void** $ppDepthStencilState
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDepthStencilState($this, $pDepthStencilDesc, $ppDepthStencilState){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pRasterizerDesc
	 * @param \System\Void** $ppRasterizerState
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateRasterizerState($this, $pRasterizerDesc, $ppRasterizerState){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pSamplerDesc
	 * @param \System\Void** $ppSamplerState
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateSamplerState($this, $pSamplerDesc, $ppSamplerState){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pQueryDesc
	 * @param \System\Void** $ppQuery
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateQuery($this, $pQueryDesc, $ppQuery){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pPredicateDesc
	 * @param \System\Void** $ppPredicate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreatePredicate($this, $pPredicateDesc, $ppPredicate){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pCounterDesc
	 * @param \System\Void** $ppCounter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateCounter($this, $pCounterDesc, $ppCounter){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $ContextFlags
	 * @param \System\Void** $ppDeferredContext
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDeferredContext($this, $ContextFlags, $ppDeferredContext){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $hResource
	 * @param \System\Guid* $ReturnedInterface
	 * @param \System\Void** $ppResource
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OpenSharedResource($this, $hResource, $ReturnedInterface, $ppResource){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $Format
	 * @param \System\UInt16* $pFormatSupport
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckFormatSupport($this, $Format, $pFormatSupport){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $Format
	 * @param \System\UInt16 $SampleCount
	 * @param \System\UInt16* $pNumQualityLevels
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckMultisampleQualityLevels($this, $Format, $SampleCount, $pNumQualityLevels){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pCounterInfo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckCounterInfo($this, $pCounterInfo){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pType
	 * @param \System\IntPtr $pActiveCounters
	 * @param \System\IntPtr $szName
	 * @param \System\UInt16* $pNameLength
	 * @param \System\IntPtr $szUnits
	 * @param \System\UInt16* $pUnitsLength
	 * @param \System\IntPtr $szDescription
	 * @param \System\UInt16* $pDescriptionLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckCounter($this, $pDesc, $pType, $pActiveCounters, $szName, $pNameLength, $szUnits, $pUnitsLength, $szDescription, $pDescriptionLength){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\D3D11_FEATURE $Feature
	 * @param \System\Void* $pFeatureSupportData
	 * @param \System\UInt16 $FeatureSupportDataSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckFeatureSupport($this, $Feature, $pFeatureSupportData, $FeatureSupportDataSize){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $guid
	 * @param \System\UInt16* $pDataSize
	 * @param \System\Void* $pData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPrivateData($this, $guid, $pDataSize, $pData){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $guid
	 * @param \System\UInt16 $DataSize
	 * @param \System\IntPtr* $pData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetPrivateData($this, $guid, $DataSize, $pData){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $guid
	 * @param \System\Void* $pData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetPrivateDataInterface($this, $guid, $pData){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFeatureLevel($this){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCreationFlags($this){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDeviceRemovedReason($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr* $ppImmediateContext
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetImmediateContext($this, $ppImmediateContext){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $RaiseFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetExceptionMode($this, $RaiseFlags){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetExceptionMode($this){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComID3D11DeviceVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComID3D11DeviceVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
