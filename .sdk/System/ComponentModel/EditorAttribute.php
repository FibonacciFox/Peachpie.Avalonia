<?php
namespace System\ComponentModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ComponentCollectionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $typeName
	 * @param \System\String|string $baseTypeName
	 */
	#[MethodOverride]public function __construct_2 ($typeName, $baseTypeName){}
	/**
	 * @param \System\String|string $typeName
	 * @param \System\Type $baseType
	 */
	#[MethodOverride]public function __construct_3 ($typeName, $baseType){}
	/**
	 * @param \System\Type $type
	 * @param \System\Type $baseType
	 */
	#[MethodOverride]public function __construct_4 ($type, $baseType){}
}
final class EditorAttribute extends \System\Attribute
{
	use ComponentCollectionOverride;

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $EditorBaseTypeName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $EditorTypeName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses EditorAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses EditorAttributeOverride::__construct_2 <br>public , args: ($typeName, $baseTypeName)<br>
	 * @uses EditorAttributeOverride::__construct_3 <br>public , args: ($typeName, $baseType)<br>
	 * @uses EditorAttributeOverride::__construct_4 <br>public , args: ($type, $baseType)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}