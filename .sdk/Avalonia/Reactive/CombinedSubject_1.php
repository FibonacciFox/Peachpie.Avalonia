<?php
namespace Avalonia\Reactive;
class CombinedSubject_1 extends \System\Object implements
	\Avalonia\Reactive\IAvaloniaSubject_1,
	\System\IObserver_1,
	\System\IObservable_1
{

	/**
	 * @return \System\Void|void
	 */
	public function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public function OnError($error){}
	/**
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function OnNext($value){}
	/**
	 * @param \System\IObserver_1 $observer [generic: T]
	 * @return \System\IDisposable
	 */
	public function Subscribe($observer){}
	/**
	 * @param \System\IObserver_1 $observer [generic: T]
	 * @param \System\IObservable_1 $observable [generic: T]
	 */
	public function __construct($observer, $observable){}
}