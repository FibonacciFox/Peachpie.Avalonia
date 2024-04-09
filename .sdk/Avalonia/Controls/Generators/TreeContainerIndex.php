<?php
namespace Avalonia\Controls\Generators;
class TreeContainerIndex extends \System\Object
{
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[Avalonia\Controls\Control]
	 * @since readonly
	 */
	public $Containers;
	/**
	 * @param \System\Object|object $item
	 * @return \Avalonia\Controls\Control
	 */
	public function ContainerFromItem($item){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Object|object
	 */
	public function ItemFromContainer($container){}
}