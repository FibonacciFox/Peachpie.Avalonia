<?php
namespace System\Runtime\Serialization;
/**
 */
class OptionalFieldAttribute extends \System\Attribute
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $VersionAdded;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_VersionAdded(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_VersionAdded($value){}
}
