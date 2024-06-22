<?php
namespace System\Windows\Markup;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RotateLayoutOverride {
	/**
	 * @param \System\Type $valueSerializerType
	 */
	#[MethodOverride]public function __construct_1 ($valueSerializerType){}
	/**
	 * @param \System\String|string $valueSerializerTypeName
	 */
	#[MethodOverride]public function __construct_2 ($valueSerializerTypeName){}
}
final class ValueSerializerAttribute extends \System\Attribute
{
	use RotateLayoutOverride;

	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ValueSerializerType;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ValueSerializerTypeName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses ValueSerializerAttributeOverride::__construct_1 <br>public , args: ($valueSerializerType)<br>
	 * @uses ValueSerializerAttributeOverride::__construct_2 <br>public , args: ($valueSerializerTypeName)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}