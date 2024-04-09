<?php
namespace Avalonia\Automation\Peers;
class TextBlockAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer
{
	/**
	 * @property dublicate
	 * @var \Avalonia\Controls\TextBlock|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @param \Avalonia\Controls\TextBlock $owner
	 */
	public function __construct($owner){}
}