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
	 * @var \System\Numerics\Vector2
	 * @property
	 */
	public readonly $AnchorPoint;
	/**
	 * @var \Avalonia\Win32\WinRT\CompositionBackfaceVisibility
	 * @property
	 */
	public readonly $BackfaceVisibility;
	/**
	 * @var \Avalonia\Win32\WinRT\CompositionBorderMode
	 * @property
	 */
	public readonly $BorderMode;
	/**
	 * @var \System\Numerics\Vector3
	 * @property
	 */
	public readonly $CenterPoint;
	/**
	 * @var \Avalonia\Win32\WinRT\ICompositionClip
	 * @property
	 */
	public readonly $Clip;
	/**
	 * @var \Avalonia\Win32\WinRT\CompositionCompositeMode
	 * @property
	 */
	public readonly $CompositeMode;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $IsVisible;
	/**
	 * @var \System\Numerics\Vector3
	 * @property
	 */
	public readonly $Offset;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $Opacity;
	/**
	 * @var \System\Numerics\Quaternion
	 * @property
	 */
	public readonly $Orientation;
	/**
	 * @var \Avalonia\Win32\WinRT\IContainerVisual
	 * @property
	 */
	public readonly $Parent;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $RotationAngle;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $RotationAngleInDegrees;
	/**
	 * @var \System\Numerics\Vector3
	 * @property
	 */
	public readonly $RotationAxis;
	/**
	 * @var \System\Numerics\Vector3
	 * @property
	 */
	public readonly $Scale;
	/**
	 * @var \System\Numerics\Vector2
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\Numerics\Matrix4x4
	 * @property
	 */
	public readonly $TransformMatrix;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $RuntimeClassName;
	/**
	 * @var \Avalonia\Win32\WinRT\TrustLevel
	 * @property
	 */
	public readonly $TrustLevel;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $NativePointer;
	/**
	 * @var \System\Void***
	 * @property
	 */
	public readonly $PPV;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDisposed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $OwnsHandle;
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
