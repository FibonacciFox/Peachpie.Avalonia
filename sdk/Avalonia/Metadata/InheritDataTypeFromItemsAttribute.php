<?php
namespace Avalonia\Metadata;
/**
 */
class InheritDataTypeFromItemsAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $AncestorItemsProperty;
	/**
	 * @var \System\Type
	 * @property
	 */
	public $AncestorType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_AncestorItemsProperty(){}
	/**
	 * @return \System\Type
	 */
	public  function get_AncestorType(){}
	/**
	 * @param \System\Type $value
	 * @return \System\Void|void
	 */
	public  function set_AncestorType($value){}
}
