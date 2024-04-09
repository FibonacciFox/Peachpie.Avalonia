<?php
namespace Avalonia\Automation\Peers;
class RangeBaseAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer implements
	\Avalonia\Automation\Provider\IRangeValueProvider
{
	/**
	 * @property dublicate
	 * @var \Avalonia\Controls\Primitives\RangeBase|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Maximum;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Minimum;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $SmallChange;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $LargeChange;
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public function SetValue($value){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OwnerPropertyChanged($sender, $e){}
	/**
	 * @param \Avalonia\Controls\Primitives\RangeBase $owner
	 */
	public function __construct($owner){}
}