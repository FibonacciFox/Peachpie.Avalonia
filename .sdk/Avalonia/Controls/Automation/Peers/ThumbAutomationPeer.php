<?php
namespace Avalonia\Controls\Automation\Peers;
class ThumbAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer
{

	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 * @since readonly
	 */
	public $Owner;
	/**
	 * @param \Avalonia\Controls\Primitives\Thumb $owner
	 */
	public function __construct($owner){}
}