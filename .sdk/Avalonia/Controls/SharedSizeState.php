<?php
namespace Avalonia\Controls;
class SharedSizeState extends \System\Object
{


	/**
	 * @param \Avalonia\Controls\DefinitionBase $member
	 * @return \System\Void|void
	 */
	protected function AddMember($member){}
	/**
	 * @param \Avalonia\Controls\DefinitionBase $member
	 * @return \System\Void|void
	 */
	protected function RemoveMember($member){}
	/**
	 * @return \System\Void|void
	 */
	protected function Invalidate(){}
	/**
	 * @param \Avalonia\Controls\Control $layoutUpdatedHost
	 * @return \System\Void|void
	 */
	protected function EnsureDeferredValidation($layoutUpdatedHost){}
	private function EnsureUserSizeValid(){}
	private function OnLayoutUpdated($sender, $e){}
}