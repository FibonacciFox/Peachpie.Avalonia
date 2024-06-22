<?php
namespace Avalonia\Automation\Peers;
class MenuItemAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer
{

	/**
	 * @property duplicate
	 * @var \Avalonia\Controls\MenuItem|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @param \Avalonia\Controls\MenuItem $owner
	 */
	public function __construct($owner){}
}