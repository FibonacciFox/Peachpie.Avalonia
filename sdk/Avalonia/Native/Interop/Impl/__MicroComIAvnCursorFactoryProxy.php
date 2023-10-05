<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnCursorFactoryProxyMethodsOverride
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
class __MicroComIAvnCursorFactoryProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnCursorFactory
{
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
	 * @param \Avalonia\Native\Interop\AvnStandardCursorType $cursorType
	 * @return \Avalonia\Native\Interop\IAvnCursor
	 */
	public  function GetCursor($cursorType){}
	/**
	 * @param \System\Void* $bitmapData
	 * @param \System\IntPtr $length
	 * @param \Avalonia\Native\Interop\AvnPixelSize $hotPixel
	 * @return \Avalonia\Native\Interop\IAvnCursor
	 */
	public  function CreateCustomCursor($bitmapData, $length, $hotPixel){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnCursorFactoryProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnCursorFactoryProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnCursorFactoryProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnCursorFactoryProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
