<?php
namespace Avalonia\Controls\Primitives;
class ScrollEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $NewValue;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\ScrollEventType
	 */
	public $ScrollEventType;
	/**
	 * @param \Avalonia\Controls\Primitives\ScrollEventType $eventType
	 * @param \System\Double|double $newValue
	 */
	public function __construct($eventType, $newValue){}
}