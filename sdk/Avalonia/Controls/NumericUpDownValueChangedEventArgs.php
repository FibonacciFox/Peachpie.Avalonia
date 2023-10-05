<?php
namespace Avalonia\Controls;
/**
 */
class NumericUpDownValueChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \System\Nullable_1[System\Decimal]
	 * @property
	 */
	public readonly $OldValue;
	/**
	 * @var \System\Nullable_1[System\Decimal]
	 * @property
	 */
	public readonly $NewValue;
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
	 * @return \System\Nullable_1
	 */
	public  function get_OldValue(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_NewValue(){}
}
