<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnPlatformThreadingInterfaceProxyMethodsOverride
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
class __MicroComIAvnPlatformThreadingInterfaceProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnPlatformThreadingInterface
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentThreadIsLoopThread;
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
	 * @return \System\Int32|int
	 */
	public  function get_CurrentThreadIsLoopThread(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnPlatformThreadingInterfaceEvents $cb
	 * @return \System\Void|void
	 */
	public  function SetEvents($cb){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnLoopCancellation
	 */
	public  function CreateLoopCancellation(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnLoopCancellation $cancel
	 * @return \System\Void|void
	 */
	public  function RunLoop($cancel){}
	/**
	 * @return \System\Void|void
	 */
	public  function Signal(){}
	/**
	 * @param \System\Int32|int $ms
	 * @return \System\Void|void
	 */
	public  function UpdateTimer($ms){}
	/**
	 * @return \System\Void|void
	 */
	public  function RequestBackgroundProcessing(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnPlatformThreadingInterfaceProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnPlatformThreadingInterfaceProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnPlatformThreadingInterfaceProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnPlatformThreadingInterfaceProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
