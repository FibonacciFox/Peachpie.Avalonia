<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionEffectBrushProxyMethodsOverride
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
class __MicroComICompositionEffectBrushProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositionEffectBrush
{
	/**
	 * @param \System\IntPtr $name
	 * @return \Avalonia\Win32\WinRT\ICompositionBrush
	 */
	public  function GetSourceParameter($name){}
	/**
	 * @param \System\IntPtr $name
	 * @param \Avalonia\Win32\WinRT\ICompositionBrush $source
	 * @return \System\Void|void
	 */
	public  function SetSourceParameter($name, $source){}
	/**
	 * @uses __MicroComICompositionEffectBrushProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositionEffectBrushProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositionEffectBrushProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositionEffectBrushProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
