<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionSpriteShapeProxyMethodsOverride
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
class __MicroComICompositionSpriteShapeProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositionSpriteShape
{
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositionBrush
	 */
	public  function get_FillBrush(){}
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionBrush $value
	 * @return \System\Void|void
	 */
	public  function SetFillBrush($value){}
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositionGeometry
	 */
	public  function get_Geometry(){}
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionGeometry $value
	 * @return \System\Void|void
	 */
	public  function SetGeometry($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_IsStrokeNonScaling(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function SetIsStrokeNonScaling($value){}
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositionBrush
	 */
	public  function get_StrokeBrush(){}
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionBrush $value
	 * @return \System\Void|void
	 */
	public  function SetStrokeBrush($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetStrokeDashArray(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetStrokeDashCap(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetStrokeDashCap(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetStrokeDashOffset(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetStrokeDashOffset(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetStrokeEndCap(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetStrokeEndCap(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetStrokeLineJoin(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetStrokeLineJoin(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetStrokeMiterLimit(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetStrokeMiterLimit(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetStrokeStartCap(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetStrokeStartCap(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetStrokeThickness(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetStrokeThickness(){}
	/**
	 * @uses __MicroComICompositionSpriteShapeProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositionSpriteShapeProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositionSpriteShapeProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositionSpriteShapeProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
