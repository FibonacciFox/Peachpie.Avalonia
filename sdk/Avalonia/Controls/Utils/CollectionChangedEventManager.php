<?php
namespace Avalonia\Controls\Utils;
/**
 */
class CollectionChangedEventManager extends \System\Object
{
	/**
	 * @var \Avalonia\Controls\Utils\CollectionChangedEventManager
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @return \Avalonia\Controls\Utils\CollectionChangedEventManager
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $collection
	 * @param \Avalonia\Controls\Utils\ICollectionChangedListener $listener
	 * @return \System\Void|void
	 */
	public  function AddListener($collection, $listener){}
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $collection
	 * @param \Avalonia\Controls\Utils\ICollectionChangedListener $listener
	 * @return \System\Void|void
	 */
	public  function RemoveListener($collection, $listener){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
