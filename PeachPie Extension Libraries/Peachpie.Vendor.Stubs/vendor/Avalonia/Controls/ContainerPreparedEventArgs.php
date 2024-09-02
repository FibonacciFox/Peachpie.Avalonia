<?php
namespace Avalonia\Controls;
class ContainerPreparedEventArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 * @since readonly
	 */
	public $Container;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Index;
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Int32|int $index
	 */
	public function __construct($container, $index){}
}