<?php
namespace Avalonia\Controls;
class ContainerIndexChangedEventArgs extends \System\EventArgs
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
	public $NewIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $OldIndex;
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 */
	public function __construct($container, $oldIndex, $newIndex){}
}