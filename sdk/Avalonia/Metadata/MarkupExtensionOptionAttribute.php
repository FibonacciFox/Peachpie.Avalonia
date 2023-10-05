<?php
namespace Avalonia\Metadata;
/**
 */
class MarkupExtensionOptionAttribute extends \System\Attribute
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Priority;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Priority(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Priority($value){}
}
