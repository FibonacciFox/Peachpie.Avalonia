<?php
namespace Avalonia\Controls;
class NumericUpDownValueChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{

	/**
	 * @property
	 * @var \System\Nullable_1[System\Decimal]
	 * @since readonly
	 */
	public $OldValue;
	/**
	 * @property
	 * @var \System\Nullable_1[System\Decimal]
	 * @since readonly
	 */
	public $NewValue;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Handled;
	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutedEvent
	 */
	public $RoutedEvent;
	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 */
	public $Route;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Source;
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Nullable_1 $oldValue [generic: System\Decimal]
	 * @param \System\Nullable_1 $newValue [generic: System\Decimal]
	 */
	public function __construct($routedEvent, $oldValue, $newValue){}
}