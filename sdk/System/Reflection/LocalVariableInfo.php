<?php
namespace System\Reflection;
/**
 */
class LocalVariableInfo extends \System\Object
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $LocalType;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LocalIndex;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPinned;
	/**
	 * @return \System\Type
	 */
	public  function get_LocalType(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LocalIndex(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPinned(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
