<?php
namespace Avalonia\Controls\ApplicationLifetimes;
class ControlledApplicationLifetimeStartupEventArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \System\String[]|array
	 * @since readonly
	 */
	public $Args;
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $args [generic: System\String]
	 */
	public function __construct($args){}
}