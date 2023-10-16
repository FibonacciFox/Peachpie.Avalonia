<?php
namespace System\Reflection;
/**
 */
class ObfuscateAssemblyAttribute extends \System\Attribute
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $AssemblyIsPrivate;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $StripAfterObfuscation;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Boolean
	 */
	public  function get_AssemblyIsPrivate(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_StripAfterObfuscation(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_StripAfterObfuscation($value){}
}
