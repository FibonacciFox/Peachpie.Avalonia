<?php
namespace Avalonia\Controls\Primitives;
/**
 */
class TemplateAppliedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \Avalonia\Controls\INameScope
	 * @property
	 */
	public readonly $NameScope;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Handled;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent
	 * @property
	 */
	public $RoutedEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 * @property
	 */
	public $Route;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Source;
	/**
	 * @return \Avalonia\Controls\INameScope
	 */
	public  function get_NameScope(){}
}
