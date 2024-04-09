<?php
namespace Avalonia\Controls;
class ContainerClearingEventArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 * @since readonly
	 */
	public $Container;
	/**
	 * @param \Avalonia\Controls\Control $container
	 */
	public function __construct($container){}
}