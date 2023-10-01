<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionSurfaceBrushProxyMethodsOverride
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
class __MicroComICompositionSurfaceBrushProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositionSurfaceBrush
{
	/**
	 * @return \Avalonia\Win32\WinRT\CompositionBitmapInterpolationMode
	 */
	public  function get_BitmapInterpolationMode(){}
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionBitmapInterpolationMode $value
	 * @return \System\Void|void
	 */
	public  function SetBitmapInterpolationMode($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_HorizontalAlignmentRatio(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function SetHorizontalAlignmentRatio($value){}
	/**
	 * @return \Avalonia\Win32\WinRT\CompositionStretch
	 */
	public  function get_Stretch(){}
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionStretch $value
	 * @return \System\Void|void
	 */
	public  function SetStretch($value){}
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositionSurface
	 */
	public  function get_Surface(){}
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionSurface $value
	 * @return \System\Void|void
	 */
	public  function SetSurface($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_VerticalAlignmentRatio(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function SetVerticalAlignmentRatio($value){}
	/**
	 * @uses __MicroComICompositionSurfaceBrushProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositionSurfaceBrushProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositionSurfaceBrushProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositionSurfaceBrushProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
