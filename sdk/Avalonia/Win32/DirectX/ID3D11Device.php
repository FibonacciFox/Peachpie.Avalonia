<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface ID3D11Device
{
	/**
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 */
	public function CreateBuffer($pDesc, $pInitialData);
	/**
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 */
	public function CreateTexture1D($pDesc, $pInitialData);
	/**
	 * @param \Avalonia\Win32\DirectX\D3D11_TEXTURE2D_DESC* $pDesc
	 * @param \System\IntPtr $pInitialData
	 */
	public function CreateTexture2D($pDesc, $pInitialData);
	/**
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 */
	public function CreateTexture3D($pDesc, $pInitialData);
	/**
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 */
	public function CreateShaderResourceView($pResource, $pDesc);
	/**
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 */
	public function CreateUnorderedAccessView($pResource, $pDesc);
	/**
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 */
	public function CreateRenderTargetView($pResource, $pDesc);
	/**
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 */
	public function CreateDepthStencilView($pResource, $pDesc);
	/**
	 * @param \System\IntPtr $pInputElementDescs
	 * @param \System\UInt16 $NumElements
	 * @param \System\Void* $pShaderBytecodeWithInputSignature
	 * @param \System\IntPtr $BytecodeLength
	 */
	public function CreateInputLayout($pInputElementDescs, $NumElements, $pShaderBytecodeWithInputSignature, $BytecodeLength);
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 */
	public function CreateVertexShader($pShaderBytecode, $BytecodeLength, $pClassLinkage);
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 */
	public function CreateGeometryShader($pShaderBytecode, $BytecodeLength, $pClassLinkage);
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pSODeclaration
	 * @param \System\UInt16 $NumEntries
	 * @param \System\UInt16* $pBufferStrides
	 * @param \System\UInt16 $NumStrides
	 * @param \System\UInt16 $RasterizedStream
	 * @param \System\IntPtr $pClassLinkage
	 */
	public function CreateGeometryShaderWithStreamOutput($pShaderBytecode, $BytecodeLength, $pSODeclaration, $NumEntries, $pBufferStrides, $NumStrides, $RasterizedStream, $pClassLinkage);
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 */
	public function CreatePixelShader($pShaderBytecode, $BytecodeLength, $pClassLinkage);
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 */
	public function CreateHullShader($pShaderBytecode, $BytecodeLength, $pClassLinkage);
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 */
	public function CreateDomainShader($pShaderBytecode, $BytecodeLength, $pClassLinkage);
	/**
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 */
	public function CreateComputeShader($pShaderBytecode, $BytecodeLength, $pClassLinkage);
	/**
	 */
	public function CreateClassLinkage();
	/**
	 * @param \System\IntPtr $pBlendStateDesc
	 */
	public function CreateBlendState($pBlendStateDesc);
	/**
	 * @param \System\IntPtr $pDepthStencilDesc
	 */
	public function CreateDepthStencilState($pDepthStencilDesc);
	/**
	 * @param \System\IntPtr $pRasterizerDesc
	 */
	public function CreateRasterizerState($pRasterizerDesc);
	/**
	 * @param \System\IntPtr $pSamplerDesc
	 */
	public function CreateSamplerState($pSamplerDesc);
	/**
	 * @param \System\IntPtr $pQueryDesc
	 */
	public function CreateQuery($pQueryDesc);
	/**
	 * @param \System\IntPtr $pPredicateDesc
	 */
	public function CreatePredicate($pPredicateDesc);
	/**
	 * @param \System\IntPtr $pCounterDesc
	 */
	public function CreateCounter($pCounterDesc);
	/**
	 * @param \System\UInt16 $ContextFlags
	 */
	public function CreateDeferredContext($ContextFlags);
	/**
	 * @param \System\IntPtr $hResource
	 * @param \System\Guid* $ReturnedInterface
	 */
	public function OpenSharedResource($hResource, $ReturnedInterface);
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $Format
	 * @param \System\UInt16* $pFormatSupport
	 */
	public function CheckFormatSupport($Format, $pFormatSupport);
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $Format
	 * @param \System\UInt16 $SampleCount
	 * @param \System\UInt16* $pNumQualityLevels
	 */
	public function CheckMultisampleQualityLevels($Format, $SampleCount, $pNumQualityLevels);
	/**
	 * @param \System\IntPtr $pCounterInfo
	 */
	public function CheckCounterInfo($pCounterInfo);
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
	 */
	public function CheckCounter($pDesc, $pType, $pActiveCounters, $szName, $pNameLength, $szUnits, $pUnitsLength, $szDescription, $pDescriptionLength);
	/**
	 * @param \Avalonia\Win32\DirectX\D3D11_FEATURE $Feature
	 * @param \System\Void* $pFeatureSupportData
	 * @param \System\UInt16 $FeatureSupportDataSize
	 */
	public function CheckFeatureSupport($Feature, $pFeatureSupportData, $FeatureSupportDataSize);
	/**
	 * @param \System\Guid* $guid
	 * @param \System\UInt16* $pDataSize
	 * @param \System\Void* $pData
	 */
	public function GetPrivateData($guid, $pDataSize, $pData);
	/**
	 * @param \System\Guid* $guid
	 * @param \System\UInt16 $DataSize
	 * @param \System\IntPtr* $pData
	 */
	public function SetPrivateData($guid, $DataSize, $pData);
	/**
	 * @param \System\Guid* $guid
	 * @param \MicroCom\Runtime\IUnknown $pData
	 */
	public function SetPrivateDataInterface($guid, $pData);
	/**
	 */
	public function get_FeatureLevel();
	/**
	 */
	public function get_CreationFlags();
	/**
	 */
	public function get_DeviceRemovedReason();
	/**
	 * @param \System\IntPtr* $ppImmediateContext
	 */
	public function GetImmediateContext($ppImmediateContext);
	/**
	 * @param \System\UInt16 $RaiseFlags
	 */
	public function SetExceptionMode($RaiseFlags);
	/**
	 */
	public function get_ExceptionMode();
}
