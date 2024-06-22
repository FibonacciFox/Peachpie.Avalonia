<?php
namespace Avalonia\Controls\Automation\Peers;
class LabelAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer
{

	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 * @since readonly
	 */
	public $Owner;
	/**
	 * @param \Avalonia\Controls\Label $owner
	 */
	public function __construct($owner){}
}