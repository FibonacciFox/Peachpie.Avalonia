<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIVisual2ProxyMethodsOverride
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
class __MicroComIVisual2Proxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\IVisual2
{
	/**
	 * @var \Avalonia\Win32\WinRT\IVisual
	 * @property
	 */
	public readonly $ParentForTransform;
	/**
	 * @var \System\Numerics\Vector3
	 * @property
	 */
	public readonly $RelativeOffsetAdjustment;
	/**
	 * @var \System\Numerics\Vector2
	 * @property
	 */
	public readonly $RelativeSizeAdjustment;
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
	 * @return \Avalonia\Win32\WinRT\IVisual
	 */
	public  function get_ParentForTransform(){}
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $value
	 * @return \System\Void|void
	 */
	public  function SetParentForTransform($value){}
	/**
	 * @return \System\Numerics\Vector3
	 */
	public  function get_RelativeOffsetAdjustment(){}
	/**
	 * @param \System\Numerics\Vector3 $value
	 * @return \System\Void|void
	 */
	public  function SetRelativeOffsetAdjustment($value){}
	/**
	 * @return \System\Numerics\Vector2
	 */
	public  function get_RelativeSizeAdjustment(){}
	/**
	 * @param \System\Numerics\Vector2 $value
	 * @return \System\Void|void
	 */
	public  function SetRelativeSizeAdjustment($value){}
	/**
	 * @uses __MicroComIVisual2ProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIVisual2ProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIVisual2ProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIVisual2ProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
