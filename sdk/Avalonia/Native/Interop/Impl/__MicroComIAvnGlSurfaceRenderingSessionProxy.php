<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnGlSurfaceRenderingSessionProxyMethodsOverride
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
class __MicroComIAvnGlSurfaceRenderingSessionProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnGlSurfaceRenderingSession
{
	/**
	 * @var \Avalonia\Native\Interop\AvnPixelSize
	 * @property
	 */
	public readonly $PixelSize;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Scaling;
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
	 * @return \Avalonia\Native\Interop\AvnPixelSize
	 */
	public  function get_PixelSize(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Scaling(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnGlSurfaceRenderingSessionProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnGlSurfaceRenderingSessionProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnGlSurfaceRenderingSessionProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnGlSurfaceRenderingSessionProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
