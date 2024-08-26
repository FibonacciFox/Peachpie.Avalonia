<?php
namespace Avalonia\Automation\Peers;
class TextBoxAutomationPeer extends \Avalonia\Automation\Peers\ControlAutomationPeer implements
	\Avalonia\Automation\Provider\IValueProvider
{
	/**
	 * @property dublicate
	 * @var \Avalonia\Controls\TextBox|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Value;
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public function SetValue($value){}
	/**
	 * @param \Avalonia\Controls\TextBox $owner
	 */
	public function __construct($owner){}
}