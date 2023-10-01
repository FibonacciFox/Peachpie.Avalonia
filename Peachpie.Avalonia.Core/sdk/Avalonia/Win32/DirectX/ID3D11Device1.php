<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface ID3D11Device1
{
	/**
	 * @param \System\Void** $ppImmediateContext
	 */
	public function GetImmediateContext1($ppImmediateContext);
	/**
	 * @param \System\UInt16 $ContextFlags
	 */
	public function CreateDeferredContext1($ContextFlags);
	/**
	 * @param \System\Void* $pBlendStateDesc
	 */
	public function CreateBlendState1($pBlendStateDesc);
	/**
	 * @param \System\Void* $pRasterizerDesc
	 */
	public function CreateRasterizerState1($pRasterizerDesc);
	/**
	 * @param \System\UInt16 $Flags
	 * @param \System\Void* $pFeatureLevels
	 * @param \System\UInt16 $FeatureLevels
	 * @param \System\UInt16 $SDKVersion
	 * @param \System\Guid* $EmulatedInterface
	 * @param \System\Void* $pChosenFeatureLevel
	 */
	public function CreateDeviceContextState($Flags, $pFeatureLevels, $FeatureLevels, $SDKVersion, $EmulatedInterface, $pChosenFeatureLevel);
	/**
	 * @param \System\IntPtr $hResource
	 * @param \System\Guid* $ReturnedInterface
	 */
	public function OpenSharedResource1($hResource, $ReturnedInterface);
	/**
	 * @param \System\UInt16* $lpName
	 * @param \System\Int32|int $dwDesiredAccess
	 * @param \System\Guid* $returnedInterface
	 * @param \System\Void** $ppResource
	 */
	public function OpenSharedResourceByName($lpName, $dwDesiredAccess, $returnedInterface, $ppResource);
}
