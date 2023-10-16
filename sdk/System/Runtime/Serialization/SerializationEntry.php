<?php
namespace System\Runtime\Serialization;
/**
 */
class SerializationEntry extends \System\ValueType
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ObjectType;
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Type
	 */
	public  function get_ObjectType(){}
}
