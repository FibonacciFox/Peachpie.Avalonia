<?php
namespace Avalonia;
class AvaloniaPropertyChangedEventArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \Avalonia\AvaloniaObject
	 * @since readonly
	 */
	public $Sender;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 * @since readonly
	 */
	public $Property;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $OldValue;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $NewValue;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingPriority
	 */
	public $Priority;
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	abstract protected function GetProperty();
	/**
	 * @return \System\Object|object
	 */
	abstract protected function GetOldValue();
	/**
	 * @return \System\Object|object
	 */
	abstract protected function GetNewValue();
	/**
	 * @param \Avalonia\AvaloniaObject $sender
	 * @param \Avalonia\Data\BindingPriority $priority
	 */
	public function __construct($sender, $priority){}
}