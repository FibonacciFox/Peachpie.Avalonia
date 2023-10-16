<?php
namespace System\Security\AccessControl;
/**
 */
class Privilege extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $NeedToRevert;
	/**
	 * @param \System\String|string $privilege
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LuidFromPrivilege($privilege){}
	/**
	 * @return \System\Void|void
	 */
	public  function Enable(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_NeedToRevert(){}
	/**
	 * @param \System\Boolean $enable
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToggleState($enable){}
	/**
	 * @return \System\Void|void
	 */
	public  function Revert(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Reset(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
