<?php
namespace System\ComponentModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ComponentCollectionOverride {
	/**
	 * @param \System\String|string $designerTypeName
	 */
	#[MethodOverride]public function __construct_1 ($designerTypeName){}
	/**
	 * @param \System\Type $designerType
	 */
	#[MethodOverride]public function __construct_2 ($designerType){}
	/**
	 * @param \System\String|string $designerTypeName
	 * @param \System\String|string $designerBaseTypeName
	 */
	#[MethodOverride]public function __construct_3 ($designerTypeName, $designerBaseTypeName){}
	/**
	 * @param \System\String|string $designerTypeName
	 * @param \System\Type $designerBaseType
	 */
	#[MethodOverride]public function __construct_4 ($designerTypeName, $designerBaseType){}
	/**
	 * @param \System\Type $designerType
	 * @param \System\Type $designerBaseType
	 */
	#[MethodOverride]public function __construct_5 ($designerType, $designerBaseType){}
}
final class DesignerAttribute extends \System\Attribute
{
	use ComponentCollectionOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DesignerBaseTypeName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DesignerTypeName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses DesignerAttributeOverride::__construct_1 <br>public , args: ($designerTypeName)<br>
	 * @uses DesignerAttributeOverride::__construct_2 <br>public , args: ($designerType)<br>
	 * @uses DesignerAttributeOverride::__construct_3 <br>public , args: ($designerTypeName, $designerBaseTypeName)<br>
	 * @uses DesignerAttributeOverride::__construct_4 <br>public , args: ($designerTypeName, $designerBaseType)<br>
	 * @uses DesignerAttributeOverride::__construct_5 <br>public , args: ($designerType, $designerBaseType)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}