<?php
namespace Avalonia\Reactive;
class LightweightObservableBase_1 extends \System\Object implements
	\System\IObservable_1
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasObservers;
	/**
	 * @param \System\IObserver_1 $observer [generic: T]
	 * @return \System\IDisposable
	 */
	public function Subscribe($observer){}
	private function Remove($observer){}
	/**
	 * @return \System\Void|void
	 */
	abstract protected function Initialize();
	/**
	 * @return \System\Void|void
	 */
	abstract protected function Deinitialize();
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
	 * @param \System\IObserver_1 $observer [generic: T]
	 * @param \System\Boolean|bool $first
	 * @return \System\Void|void
	 */
	protected function Subscribed($observer, $first){}
}