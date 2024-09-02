<?php
namespace Avalonia\Automation\Peers;
class ScrollBarAutomationPeer extends \Avalonia\Automation\Peers\RangeBaseAutomationPeer implements
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
	 * @param \Avalonia\Controls\Primitives\ScrollBar $owner
	 */
	public function __construct($owner){}
}