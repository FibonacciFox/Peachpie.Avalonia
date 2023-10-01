<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComID3D11Device1VTableMethodsOverride
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
class __MicroComID3D11Device1VTable extends \Avalonia\Win32\DirectX\Impl\__MicroComID3D11DeviceVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppImmediateContext
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetImmediateContext1($this, $ppImmediateContext){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $ContextFlags
	 * @param \System\Void** $ppDeferredContext
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDeferredContext1($this, $ContextFlags, $ppDeferredContext){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pBlendStateDesc
	 * @param \System\Void** $ppBlendState
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateBlendState1($this, $pBlendStateDesc, $ppBlendState){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pRasterizerDesc
	 * @param \System\Void** $ppRasterizerState
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateRasterizerState1($this, $pRasterizerDesc, $ppRasterizerState){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $Flags
	 * @param \System\Void* $pFeatureLevels
	 * @param \System\UInt16 $FeatureLevels
	 * @param \System\UInt16 $SDKVersion
	 * @param \System\Guid* $EmulatedInterface
	 * @param \System\Void* $pChosenFeatureLevel
	 * @param \System\Void** $ppContextState
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDeviceContextState($this, $Flags, $pFeatureLevels, $FeatureLevels, $SDKVersion, $EmulatedInterface, $pChosenFeatureLevel, $ppContextState){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $hResource
	 * @param \System\Guid* $ReturnedInterface
	 * @param \System\Void** $ppResource
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OpenSharedResource1($this, $hResource, $ReturnedInterface, $ppResource){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16* $lpName
	 * @param \System\Int32|int $dwDesiredAccess
	 * @param \System\Guid* $returnedInterface
	 * @param \System\Void** $ppResource
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OpenSharedResourceByName($this, $lpName, $dwDesiredAccess, $returnedInterface, $ppResource){}
	/**
	 * @uses __MicroComID3D11Device1VTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComID3D11Device1VTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
