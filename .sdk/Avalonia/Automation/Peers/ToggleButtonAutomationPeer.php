<?php
namespace Avalonia\Automation\Peers;
class ToggleButtonAutomationPeer extends \Avalonia\Automation\Peers\ContentControlAutomationPeer implements
	\Avalonia\Automation\Provider\IToggleProvider
{

	/**
	 * @property duplicate
	 * @var \Avalonia\Controls\Primitives\ToggleButton|\Avalonia\Controls\ContentControl|\Avalonia\Controls\Control
	 */
	public $Owner;
	private function get_ToggleState(){}
	private function Toggle(){}
	/**
	 * @param \Avalonia\Controls\Primitives\ToggleButton $owner
	 */
	public function __construct($owner){}
}