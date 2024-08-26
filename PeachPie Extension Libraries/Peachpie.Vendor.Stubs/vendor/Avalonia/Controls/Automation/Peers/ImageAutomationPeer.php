<?php
namespace Avalonia\Controls\Automation\Peers;
class ImageAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer
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