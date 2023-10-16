<?php
namespace System\Security\Principal;
/**
 */
class IdentityReference extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \System\String|string
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Type $targetType
	 * @return \System\Boolean
	 */
	public  function IsValidTargetType($targetType){}
	/**
	 * @param \System\Type $targetType
	 * @return \System\Security\Principal\IdentityReference
	 */
	public  function Translate($targetType){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Boolean
	 */
	public  function Equals($o){}
	/**
	 * @param \System\Security\Principal\IdentityReference $left
	 * @param \System\Security\Principal\IdentityReference $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Security\Principal\IdentityReference $left
	 * @param \System\Security\Principal\IdentityReference $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
