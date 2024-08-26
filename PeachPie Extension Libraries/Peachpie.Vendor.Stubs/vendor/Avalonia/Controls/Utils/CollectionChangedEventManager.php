<?php
namespace Avalonia\Controls\Utils;
class CollectionChangedEventManager extends \System\Object
{
	/**
	 * @property
	 * @var \Avalonia\Controls\Utils\CollectionChangedEventManager
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $collection
	 * @param \Avalonia\Controls\Utils\ICollectionChangedListener $listener
	 * @return \System\Void|void
	 */
	public function AddListener($collection, $listener){}
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $collection
	 * @param \Avalonia\Controls\Utils\ICollectionChangedListener $listener
	 * @return \System\Void|void
	 */
	public function RemoveListener($collection, $listener){}
}