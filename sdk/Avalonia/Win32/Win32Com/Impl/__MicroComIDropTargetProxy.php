<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDropTargetProxyMethodsOverride
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
class __MicroComIDropTargetProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\Win32Com\IDropTarget
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
	 * @param \Avalonia\Win32\Win32Com\IDataObject $pDataObj
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 * @return \System\Void|void
	 */
	public  function DragEnter($pDataObj, $grfKeyState, $pt, $pdwEffect){}
	/**
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 * @return \System\Void|void
	 */
	public  function DragOver($grfKeyState, $pt, $pdwEffect){}
	/**
	 * @return \System\Void|void
	 */
	public  function DragLeave(){}
	/**
	 * @param \Avalonia\Win32\Win32Com\IDataObject $pDataObj
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 * @return \System\Void|void
	 */
	public  function Drop($pDataObj, $grfKeyState, $pt, $pdwEffect){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIDropTargetProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDropTargetProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDropTargetProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDropTargetProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
