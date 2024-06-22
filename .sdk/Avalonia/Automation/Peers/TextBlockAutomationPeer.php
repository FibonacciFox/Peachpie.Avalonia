<?php
namespace Avalonia\Automation\Peers;
class TextBlockAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer
{

	/**
	 * @property duplicate
	 * @var \Avalonia\Controls\TextBlock|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @param \Avalonia\Controls\TextBlock $owner
	 */
	public function __construct($owner){}
}