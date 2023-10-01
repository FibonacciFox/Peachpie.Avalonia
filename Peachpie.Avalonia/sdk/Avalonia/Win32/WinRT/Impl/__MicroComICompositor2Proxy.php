<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositor2ProxyMethodsOverride
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
class __MicroComICompositor2Proxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositor2
{
	/**
	 * @return \System\Void*
	 */
	public  function CreateAmbientLight(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateAnimationGroup(){}
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositionBackdropBrush
	 */
	public  function CreateBackdropBrush(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateDistantLight(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateDropShadow(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateImplicitAnimationCollection(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateLayerVisual(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateMaskBrush(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateNineGridBrush(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreatePointLight(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateSpotLight(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateStepEasingFunction(){}
	/**
	 * @param \System\Int32|int $stepCount
	 * @return \System\Void*
	 */
	public  function CreateStepEasingFunctionWithStepCount($stepCount){}
	/**
	 * @uses __MicroComICompositor2ProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositor2ProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositor2ProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositor2ProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
