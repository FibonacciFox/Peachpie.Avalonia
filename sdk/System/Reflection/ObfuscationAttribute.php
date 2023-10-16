<?php
namespace System\Reflection;
/**
 */
class ObfuscationAttribute extends \System\Attribute
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $StripAfterObfuscation;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Exclude;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ApplyToMembers;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Feature;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Boolean
	 */
	public  function get_StripAfterObfuscation(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_StripAfterObfuscation($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Exclude(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Exclude($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ApplyToMembers(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ApplyToMembers($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Feature(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Feature($value){}
}
