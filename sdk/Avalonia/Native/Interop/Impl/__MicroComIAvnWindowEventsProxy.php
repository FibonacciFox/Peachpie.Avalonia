<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnWindowEventsProxyMethodsOverride
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
class __MicroComIAvnWindowEventsProxy extends \Avalonia\Native\Interop\Impl\__MicroComIAvnWindowBaseEventsProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnWindowBaseEvents,
	\Avalonia\Native\Interop\IAvnWindowEvents
{
	/**
	 * @var \Avalonia\Native\Interop\IAvnAutomationPeer
	 * @property
	 */
	public readonly $AutomationPeer;
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
	public  function Closing(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnWindowState $state
	 * @return \System\Void|void
	 */
	public  function WindowStateChanged($state){}
	/**
	 * @return \System\Void|void
	 */
	public  function GotInputWhenDisabled(){}
	/**
	 * @uses __MicroComIAvnWindowEventsProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnWindowEventsProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnWindowEventsProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnWindowEventsProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
