<?php
namespace Avalonia\Controls;
/**
 */
class ContainerPreparedEventArgs extends \System\EventArgs
{
	/**
	 * @var \Avalonia\Controls\Control
	 * @property
	 */
	public readonly $Container;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Index;
	/**
	 * @return \Avalonia\Controls\Control
	 */
	public  function get_Container(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Index(){}
}
