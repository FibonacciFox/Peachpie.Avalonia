<?php
namespace System\Reflection;
final class CustomAttributeType extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Reflection\CustomAttributeEncoding
	 * @since readonly
	 */
	public $EncodedType;
	/**
	 * @property
	 * @var \System\Reflection\CustomAttributeEncoding
	 * @since readonly
	 */
	public $EncodedEnumType;
	/**
	 * @property
	 * @var \System\Reflection\CustomAttributeEncoding
	 * @since readonly
	 */
	public $EncodedArrayType;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $EnumName;
	/**
	 * @param \System\Reflection\CustomAttributeEncoding $encodedType
	 * @param \System\Reflection\CustomAttributeEncoding $encodedArrayType
	 * @param \System\Reflection\CustomAttributeEncoding $encodedEnumType
	 * @param \System\String|string $enumName
	 */
	public function __construct($encodedType, $encodedArrayType, $encodedEnumType, $enumName){}
}