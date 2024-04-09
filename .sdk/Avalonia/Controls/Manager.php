<?php
namespace Avalonia\Controls;
class Manager extends \System\Object
{

	/**
	 * @return \System\Void|void
	 */
	public function Init(){}
	private function OnParentChanged($control){}
	private function OnHotkeyChanged($hotkey){}
	private function Unregister(){}
	private function Register(){}
	private function Stop(){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 */
	public function __construct($control){}
}