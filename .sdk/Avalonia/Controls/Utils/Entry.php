<?php
namespace Avalonia\Controls\Utils;
class Entry extends \System\Object implements
	\Avalonia\Utilities\IWeakEventSubscriber_1,
	\System\IDisposable
{
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[System\WeakReference_1[Avalonia\Controls\Utils\ICollectionChangedListener]]
	 * @since readonly
	 */
	public $Listeners;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function OnEvent($notifyCollectionChanged, $ev, $e){}
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $collection
	 */
	public function __construct($collection){}
}