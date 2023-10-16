<?php
namespace System\Runtime\Versioning;
/**
 */
class TargetFrameworkAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FrameworkName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $FrameworkDisplayName;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_FrameworkName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FrameworkDisplayName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_FrameworkDisplayName($value){}
}
