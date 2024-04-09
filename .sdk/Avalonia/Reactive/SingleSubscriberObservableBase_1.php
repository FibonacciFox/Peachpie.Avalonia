<?php
namespace Avalonia\Reactive;
class SingleSubscriberObservableBase_1 extends \System\Object implements
	\System\IObservable_1,
	\System\IDisposable
{

	/**
	 * @param \System\IObserver_1 $observer [generic: T]
	 * @return \System\IDisposable
	 */
	public function Subscribe($observer){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	abstract protected function Unsubscribed();
	/**
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	protected function PublishNext($value){}
	/**
	 * @return \System\Void|void
	 */
	protected function PublishCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	protected function PublishError($error){}
	/**
	 * @return \System\Void|void
	 */
	abstract protected function Subscribed();
}