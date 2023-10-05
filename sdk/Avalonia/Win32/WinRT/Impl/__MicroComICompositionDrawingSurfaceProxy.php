<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionDrawingSurfaceProxyMethodsOverride
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
class __MicroComICompositionDrawingSurfaceProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositionDrawingSurface
{
	/**
	 * @var \Avalonia\Win32\WinRT\DirectXAlphaMode
	 * @property
	 */
	public readonly $AlphaMode;
	/**
	 * @var \Avalonia\Win32\WinRT\DirectXPixelFormat
	 * @property
	 */
	public readonly $PixelFormat;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+SIZE_F
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
	 * @return \Avalonia\Win32\WinRT\DirectXAlphaMode
	 */
	public  function get_AlphaMode(){}
	/**
	 * @return \Avalonia\Win32\WinRT\DirectXPixelFormat
	 */
	public  function get_PixelFormat(){}
	/**
	 * @return \Avalonia\Win32\Interop\SIZE_F
	 */
	public  function get_Size(){}
	/**
	 * @uses __MicroComICompositionDrawingSurfaceProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositionDrawingSurfaceProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositionDrawingSurfaceProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositionDrawingSurfaceProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
