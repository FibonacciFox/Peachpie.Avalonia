<?php
namespace Avalonia\Controls;
/**
 */
class SharedSizeState extends \System\Object
{
	/**
	 * @param \Avalonia\Controls\DefinitionBase $member
	 * @return \System\Void|void
	 */
	protected  function AddMember($member){}
	/**
	 * @param \Avalonia\Controls\DefinitionBase $member
	 * @return \System\Void|void
	 */
	protected  function RemoveMember($member){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Invalidate(){}
	/**
	 * @param \Avalonia\Controls\Control $layoutUpdatedHost
	 * @return \System\Void|void
	 */
	protected  function EnsureDeferredValidation($layoutUpdatedHost){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_MinSize(){}
	/**
	 * @return \Avalonia\Controls\GridLength
	 */
	protected  function get_UserSize(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureUserSizeValid(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnLayoutUpdated($sender, $e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
