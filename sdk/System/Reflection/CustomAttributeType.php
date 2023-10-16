<?php
namespace System\Reflection;
/**
 */
class CustomAttributeType extends \System\ValueType
{
	/**
	 * @var \System\Reflection\CustomAttributeEncoding
	 * @property
	 */
	public readonly $EncodedType;
	/**
	 * @var \System\Reflection\CustomAttributeEncoding
	 * @property
	 */
	public readonly $EncodedEnumType;
	/**
	 * @var \System\Reflection\CustomAttributeEncoding
	 * @property
	 */
	public readonly $EncodedArrayType;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $EnumName;
	/**
	 * @return \System\Reflection\CustomAttributeEncoding
	 */
	public  function get_EncodedType(){}
	/**
	 * @return \System\Reflection\CustomAttributeEncoding
	 */
	public  function get_EncodedEnumType(){}
	/**
	 * @return \System\Reflection\CustomAttributeEncoding
	 */
	public  function get_EncodedArrayType(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_EnumName(){}
}
