<?php
namespace Avalonia\Controls\Generators;
/**
 */
class ItemContainerGenerator extends \System\Object
{
	/**
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @param \System\Object& $recycleKey
	 * @return \System\Boolean
	 */
	public  function NeedsContainer($item, $index, $recycleKey){}
	/**
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $recycleKey
	 * @return \Avalonia\Controls\Control
	 */
	public  function CreateContainer($item, $index, $recycleKey){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function PrepareItemContainer($container, $item, $index){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function ItemContainerPrepared($container, $item, $index){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	public  function ItemContainerIndexChanged($container, $oldIndex, $newIndex){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Void|void
	 */
	public  function ClearItemContainer($container){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Controls\Control
	 */
	public  function ContainerFromIndex($index){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Int32|int
	 */
	public  function IndexFromContainer($container){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
