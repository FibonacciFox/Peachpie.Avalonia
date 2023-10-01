<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIVisualProxyMethodsOverride
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
class __MicroComIVisualProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\IVisual
{
	/**
	 * @return \System\Numerics\Vector2
	 */
	public  function get_AnchorPoint(){}
	/**
	 * @param \System\Numerics\Vector2 $value
	 * @return \System\Void|void
	 */
	public  function SetAnchorPoint($value){}
	/**
	 * @return \Avalonia\Win32\WinRT\CompositionBackfaceVisibility
	 */
	public  function get_BackfaceVisibility(){}
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionBackfaceVisibility $value
	 * @return \System\Void|void
	 */
	public  function SetBackfaceVisibility($value){}
	/**
	 * @return \Avalonia\Win32\WinRT\CompositionBorderMode
	 */
	public  function get_BorderMode(){}
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionBorderMode $value
	 * @return \System\Void|void
	 */
	public  function SetBorderMode($value){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	public  function get_CenterPoint(){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Void|void
	 */
	public  function SetCenterPoint($value){}
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositionClip
	 */
	public  function get_Clip(){}
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionClip $value
	 * @return \System\Void|void
	 */
	public  function SetClip($value){}
	/**
	 * @return \Avalonia\Win32\WinRT\CompositionCompositeMode
	 */
	public  function get_CompositeMode(){}
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionCompositeMode $value
	 * @return \System\Void|void
	 */
	public  function SetCompositeMode($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_IsVisible(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function SetIsVisible($value){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	public  function get_Offset(){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Void|void
	 */
	public  function SetOffset($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_Opacity(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function SetOpacity($value){}
	/**
	 * @return \System\Numerics\Quaternion
	 */
	public  function get_Orientation(){}
	/**
	 * @param \System\Numerics\Quaternion $value
	 * @return \System\Void|void
	 */
	public  function SetOrientation($value){}
	/**
	 * @return \Avalonia\Win32\WinRT\IContainerVisual
	 */
	public  function get_Parent(){}
	/**
	 * @return \System\Single
	 */
	public  function get_RotationAngle(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function SetRotationAngle($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_RotationAngleInDegrees(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function SetRotationAngleInDegrees($value){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	public  function get_RotationAxis(){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Void|void
	 */
	public  function SetRotationAxis($value){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	public  function get_Scale(){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Void|void
	 */
	public  function SetScale($value){}
	/**
	 * @return \System\Numerics\Vector2
	 */
	public  function get_Size(){}
	/**
	 * @param \System\Numerics\Vector2 $value
	 * @return \System\Void|void
	 */
	public  function SetSize($value){}
	/**
	 * @return \System\Numerics\Matrix4x4
	 */
	public  function get_TransformMatrix(){}
	/**
	 * @param \System\Numerics\Matrix4x4 $value
	 * @return \System\Void|void
	 */
	public  function SetTransformMatrix($value){}
	/**
	 * @uses __MicroComIVisualProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIVisualProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIVisualProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIVisualProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
