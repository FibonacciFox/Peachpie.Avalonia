<?php
namespace System\ComponentModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RotateLayoutOverride {
	/**
	 * @param \System\String|string $typeName
	 */
	#[MethodOverride]public function __construct_1 ($typeName){}
	/**
	 * @param \System\Type $type
	 */
	#[MethodOverride]public function __construct_2 ($type){}
}
final class TypeDescriptionProviderAttribute extends \System\Attribute
{
	use RotateLayoutOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $TypeName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses TypeDescriptionProviderAttributeOverride::__construct_1 <br>public , args: ($typeName)<br>
	 * @uses TypeDescriptionProviderAttributeOverride::__construct_2 <br>public , args: ($type)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}