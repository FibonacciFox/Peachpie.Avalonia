<?php
namespace System\Reflection;
/**
 */
class AssemblyMetadataAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Key;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_Key(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Value(){}
}
