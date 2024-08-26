<?php
namespace System\ComponentModel\Design\Serialization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InvalidEnumArgumentExceptionOverride {
	/**
	 * @param \System\Type $serializerType
	 * @param \System\Type $baseSerializerType
	 */
	#[MethodOverride]public function __construct_1 ($serializerType, $baseSerializerType){}
	/**
	 * @param \System\String|string $serializerTypeName
	 * @param \System\Type $baseSerializerType
	 */
	#[MethodOverride]public function __construct_2 ($serializerTypeName, $baseSerializerType){}
	/**
	 * @param \System\String|string $serializerTypeName
	 * @param \System\String|string $baseSerializerTypeName
	 */
	#[MethodOverride]public function __construct_3 ($serializerTypeName, $baseSerializerTypeName){}
}
final class DesignerSerializerAttribute extends \System\Attribute
{
	use InvalidEnumArgumentExceptionOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $SerializerTypeName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $SerializerBaseTypeName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses DesignerSerializerAttributeOverride::__construct_1 <br>public , args: ($serializerType, $baseSerializerType)<br>
	 * @uses DesignerSerializerAttributeOverride::__construct_2 <br>public , args: ($serializerTypeName, $baseSerializerType)<br>
	 * @uses DesignerSerializerAttributeOverride::__construct_3 <br>public , args: ($serializerTypeName, $baseSerializerTypeName)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}