<?php
namespace System\Resources;
/**
 */
class ResourceLocator extends \System\ValueType
{
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_DataPosition(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_Value(){}
	/**
	 * @param \System\Resources\ResourceTypeCode $value
	 * @return \System\Boolean
	 */
	protected static function CanCache($value){}
}
