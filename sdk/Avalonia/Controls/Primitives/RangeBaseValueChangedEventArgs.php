<?php
namespace Avalonia\Controls\Primitives;
/**
 */
class RangeBaseValueChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public $OldValue;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $NewValue;
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
	 * @return \System\Double|double
	 */
	public  function get_OldValue(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_OldValue($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_NewValue(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_NewValue($value){}
}
