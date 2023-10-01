<?php
namespace Avalonia\Reactive\Operators;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Sink_2MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Sink_2 extends \Avalonia\Reactive\Operators\Sink_1 implements 
	\System\IDisposable,
	\System\IObserver_1
{
	/**
	 * @param \System\IObservable_1 $source
	 * @return \System\Void|void
	 */
	public  function Run($source){}
	/**
	 * @param \Avalonia\Reactive\Operators\TSource $value
	 * @return \System\Void|void
	 */
	public  function OnNext($value){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public  function OnError($error){}
	/**
	 * @return \System\Void|void
	 */
	public  function OnCompleted(){}
	/**
	 * @return \System\IObserver_1
	 */
	public  function GetForwarder(){}
	/**
	 * @uses Sink_2MethodsOverride::Dispose_1 ()
	 * @uses Sink_2MethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
