<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LocalValueBindingObserver_1MethodsOverride
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
	#[MethodOverride] public  function Start_3($source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OnNext_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OnNext_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OnNext_3($value){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class LocalValueBindingObserver_1 extends \Avalonia\PropertyStore\LocalValueBindingObserverBase_1 implements 
	\System\IObserver_1,
	\System\IObserver_1,
	\System\IDisposable,
	\System\IObserver_1
{
	/**
	 * @var \System\IDisposable
	 * @field
	 */
	protected $_subscription;
	/**
	 * @var \Avalonia\StyledProperty_1[T]
	 * @property
	 */
	public readonly $Property;
	/**
	 * @uses LocalValueBindingObserver_1MethodsOverride::Start_1 ($source)
	 * @uses LocalValueBindingObserver_1MethodsOverride::Start_2 ($source)
	 * @uses LocalValueBindingObserver_1MethodsOverride::Start_3 ($source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Start(mixed ...$args){}
	/**
	 * @uses LocalValueBindingObserver_1MethodsOverride::OnNext_1 ($value)
	 * @uses LocalValueBindingObserver_1MethodsOverride::OnNext_2 ($value)
	 * @uses LocalValueBindingObserver_1MethodsOverride::OnNext_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnNext(mixed ...$args){}
}
