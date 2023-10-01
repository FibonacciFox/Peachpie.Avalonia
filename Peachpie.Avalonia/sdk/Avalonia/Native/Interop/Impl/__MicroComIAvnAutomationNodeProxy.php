<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnAutomationNodeProxyMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_3(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
}
/**
 */
class __MicroComIAvnAutomationNodeProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnAutomationNode
{
	/**
	 * @uses __MicroComIAvnAutomationNodeProxyMethodsOverride::Dispose_1 ()
	 * @uses __MicroComIAvnAutomationNodeProxyMethodsOverride::Dispose_2 ($disposing)
	 * @uses __MicroComIAvnAutomationNodeProxyMethodsOverride::Dispose_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function ChildrenChanged(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnAutomationProperty $property
	 * @return \System\Void|void
	 */
	public  function PropertyChanged($property){}
	/**
	 * @return \System\Void|void
	 */
	public  function FocusChanged(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnAutomationNodeProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnAutomationNodeProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
}
