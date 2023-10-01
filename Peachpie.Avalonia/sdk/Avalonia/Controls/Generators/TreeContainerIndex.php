<?php
namespace Avalonia\Controls\Generators;
/**
 */
class TreeContainerIndex extends \System\Object
{
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Containers(){}
	/**
	 * @param \System\Object|object $item
	 * @return \Avalonia\Controls\Control
	 */
	public  function ContainerFromItem($item){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Object|object
	 */
	public  function ItemFromContainer($container){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
