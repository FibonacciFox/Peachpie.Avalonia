<?php
namespace Avalonia\Automation\Peers;
class NoneAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer
{

	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 * @since readonly
	 */
	public $Owner;
	/**
	 * @param \Avalonia\Controls\Control $owner
	 */
	public function __construct($owner){}
}