<?php
namespace Avalonia\Automation\Peers;
class ButtonAutomationPeer extends \Avalonia\Automation\Peers\ContentControlAutomationPeer implements
	\Avalonia\Automation\Provider\IInvokeProvider
{

	/**
	 * @property duplicate
	 * @var \Avalonia\Controls\Button|\Avalonia\Controls\ContentControl|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @return \System\Void|void
	 */
	public function Invoke(){}
	/**
	 * @param \Avalonia\Controls\Button $owner
	 */
	public function __construct($owner){}
}