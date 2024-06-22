<?php
namespace Avalonia\Collections;
class WeakCollectionChangedObservable extends \Avalonia\Reactive\LightweightObservableBase_1 implements
	\System\IObservable_1,
	\Avalonia\Utilities\IWeakEventSubscriber_1
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasObservers;
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Utilities\WeakEvent $ev
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	public function OnEvent($sender, $ev, $e){}
	/**
	 * @param \System\WeakReference_1 $source [generic: System\Collections\Specialized\INotifyCollectionChanged]
	 */
	public function __construct($source){}
}