<?php
namespace Avalonia\Reactive;
class LightweightSubject_1 extends \Avalonia\Reactive\LightweightObservableBase_1 implements
	\System\IObservable_1,
	\Avalonia\Reactive\IAvaloniaSubject_1,
	\System\IObserver_1
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasObservers;
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
	 */
	public function __construct(){}
}