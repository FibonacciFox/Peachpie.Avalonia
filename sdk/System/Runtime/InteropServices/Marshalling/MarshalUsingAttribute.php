<?php
namespace System\Runtime\InteropServices\Marshalling;
/**
 */
class MarshalUsingAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $ReturnsCountValue;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $NativeType;
	/**
	 * @var \System\String
	 * @property
	 */
	public $CountElementName;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $ConstantElementCount;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $ElementIndirectionDepth;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_NativeType(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_CountElementName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_CountElementName($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ConstantElementCount(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_ConstantElementCount($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ElementIndirectionDepth(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_ElementIndirectionDepth($value){}
}
