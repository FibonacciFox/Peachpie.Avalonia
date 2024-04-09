<?php
namespace Avalonia;
class AvaloniaPropertyChangedEventArgs_1 extends \Avalonia\AvaloniaPropertyChangedEventArgs
{
	/**
	 * @property dublicate
	 * @var \Avalonia\AvaloniaProperty_1[T]|\Avalonia\AvaloniaProperty
	 */
	public $Property;
	/**
	 * @property dublicate
	 * @var \Avalonia\Data\Optional_1[T]|\System\Object|object
	 */
	public $OldValue;
	/**
	 * @property dublicate
	 * @var \Avalonia\Data\BindingValue_1[T]|\System\Object|object
	 */
	public $NewValue;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaObject
	 * @since readonly
	 */
	public $Sender;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingPriority
	 * @since readonly
	 */
	public $Priority;
	/**
	 * @param \Avalonia\AvaloniaObject $sender
	 * @param \Avalonia\AvaloniaProperty_1 $property [generic: T]
	 * @param \Avalonia\Data\Optional_1 $oldValue [generic: T]
	 * @param \Avalonia\Data\BindingValue_1 $newValue [generic: T]
	 * @param \Avalonia\Data\BindingPriority $priority
	 */
	public function __construct($sender, $property, $oldValue, $newValue, $priority){}
}