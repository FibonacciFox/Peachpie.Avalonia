<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LocalValueBindingObserverBase_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Start_1($source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Start_2($source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OnNext_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OnNext_2($value){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class LocalValueBindingObserverBase_1 extends \System\Object implements 
	\System\IObserver_1,
	\System\IObserver_1,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\StyledProperty_1
	 */
	public  function get_Property(){}
	/**
	 * @uses LocalValueBindingObserverBase_1MethodsOverride::Start_1 ($source)
	 * @uses LocalValueBindingObserverBase_1MethodsOverride::Start_2 ($source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Start(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public  function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public  function OnError($error){}
	/**
	 * @uses LocalValueBindingObserverBase_1MethodsOverride::OnNext_1 ($value)
	 * @uses LocalValueBindingObserverBase_1MethodsOverride::OnNext_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnNext(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCachedDefaultValue(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
