<?php
namespace System\ComponentModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RotateLayoutOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Type $type
	 */
	#[MethodOverride]public function __construct_2 ($type){}
	/**
	 * @param \System\String|string $typeName
	 */
	#[MethodOverride]public function __construct_3 ($typeName){}
}
final class TypeConverterAttribute extends \System\Attribute
{
	use RotateLayoutOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\TypeConverterAttribute
	 */
	public static $Default;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ConverterTypeName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses TypeConverterAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses TypeConverterAttributeOverride::__construct_2 <br>public , args: ($type)<br>
	 * @uses TypeConverterAttributeOverride::__construct_3 <br>public , args: ($typeName)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}