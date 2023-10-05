<?php
namespace Avalonia\Controls;
/**
 */
class SizeChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HeightChanged;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public $NewSize;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public $PreviousSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $WidthChanged;
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
	 * @return \System\Boolean
	 */
	public  function get_HeightChanged(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_NewSize(){}
	/**
	 * @param \Avalonia\Size $value
	 * @return \System\Void|void
	 */
	public  function set_NewSize($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_PreviousSize(){}
	/**
	 * @param \Avalonia\Size $value
	 * @return \System\Void|void
	 */
	public  function set_PreviousSize($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_WidthChanged(){}
}
