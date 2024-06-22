<?php
namespace Avalonia\Reactive\Operators;
class Sink_2 extends \Avalonia\Reactive\Operators\Sink_1 implements
	\System\IDisposable,
	\System\IObserver_1
{


	/**
	 * @param \System\IObservable_1 $source [generic: TSource]
	 * @return \System\Void|void
	 */
	public function Run($source){}
	/**
	 * @param \TSource $value
	 * @return \System\Void|void
	 */
	abstract public function OnNext($value);
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public function OnError($error){}
	/**
	 * @return \System\Void|void
	 */
	public function OnCompleted(){}
	/**
	 * @return \System\IObserver_1[TTarget]
	 */
	public function GetForwarder(){}
}