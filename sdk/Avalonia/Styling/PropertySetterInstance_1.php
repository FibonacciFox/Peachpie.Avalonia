<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PropertySetterInstance_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function PublishNext_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PublishNext_2($value){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class PropertySetterInstance_1 extends \Avalonia\Reactive\SingleSubscriberObservableBase_1 implements 
	\System\IObservable_1,
	\System\IDisposable,
	\Avalonia\Styling\ISetterInstance
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsActive(){}
	/**
	 * @param \System\Boolean $hasActivator
	 * @return \System\Void|void
	 */
	public  function Start($hasActivator){}
	/**
	 * @return \System\Void|void
	 */
	public  function Activate(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Deactivate(){}
	/**
	 * @uses PropertySetterInstance_1MethodsOverride::PublishNext_1 ()
	 * @uses PropertySetterInstance_1MethodsOverride::PublishNext_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PublishNext(mixed ...$args){}
}
