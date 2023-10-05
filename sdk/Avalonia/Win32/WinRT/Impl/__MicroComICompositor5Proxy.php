<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositor5ProxyMethodsOverride
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
class __MicroComICompositor5Proxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositor5
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Comment;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $GlobalPlaybackRate;
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
	 * @return \System\IntPtr
	 */
	public  function get_Comment(){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	public  function SetComment($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_GlobalPlaybackRate(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function SetGlobalPlaybackRate($value){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateBounceScalarAnimation(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateBounceVector2Animation(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateBounceVector3Animation(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateContainerShape(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateEllipseGeometry(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateLineGeometry(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreatePathGeometry(){}
	/**
	 * @param \System\Void* $path
	 * @return \System\Void*
	 */
	public  function CreatePathGeometryWithPath($path){}
	/**
	 * @return \System\Void*
	 */
	public  function CreatePathKeyFrameAnimation(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateRectangleGeometry(){}
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositionRoundedRectangleGeometry
	 */
	public  function CreateRoundedRectangleGeometry(){}
	/**
	 * @return \Avalonia\Win32\WinRT\IShapeVisual
	 */
	public  function CreateShapeVisual(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateSpriteShape(){}
	/**
	 * @param \System\Void* $geometry
	 * @return \System\Void*
	 */
	public  function CreateSpriteShapeWithGeometry($geometry){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateViewBox(){}
	/**
	 * @return \Avalonia\Win32\WinRT\IAsyncAction
	 */
	public  function RequestCommitAsync(){}
	/**
	 * @uses __MicroComICompositor5ProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositor5ProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositor5ProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositor5ProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
