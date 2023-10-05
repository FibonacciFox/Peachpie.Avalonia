<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionRoundedRectangleGeometryProxyMethodsOverride
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
class __MicroComICompositionRoundedRectangleGeometryProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositionRoundedRectangleGeometry
{
	/**
	 * @var \System\Numerics\Vector2
	 * @property
	 */
	public readonly $CornerRadius;
	/**
	 * @var \System\Numerics\Vector2
	 * @property
	 */
	public readonly $Offset;
	/**
	 * @var \System\Numerics\Vector2
	 * @property
	 */
	public readonly $Size;
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
	public  function get_CornerRadius(){}
	/**
	 * @param \System\Numerics\Vector2 $value
	 * @return \System\Void|void
	 */
	public  function SetCornerRadius($value){}
	/**
	 * @return \System\Numerics\Vector2
	 */
	public  function get_Offset(){}
	/**
	 * @param \System\Numerics\Vector2 $value
	 * @return \System\Void|void
	 */
	public  function SetOffset($value){}
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
	 * @uses __MicroComICompositionRoundedRectangleGeometryProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositionRoundedRectangleGeometryProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositionRoundedRectangleGeometryProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositionRoundedRectangleGeometryProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
