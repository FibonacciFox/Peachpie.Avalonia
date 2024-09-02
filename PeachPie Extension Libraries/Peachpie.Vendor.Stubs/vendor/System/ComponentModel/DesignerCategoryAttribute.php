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
	 * @param \System\String|string $category
	 */
	#[MethodOverride]public function __construct_2 ($category){}
}
final class DesignerCategoryAttribute extends \System\Attribute
{
	use ComponentCollectionOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\DesignerCategoryAttribute
	 */
	public static $Component;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\DesignerCategoryAttribute
	 */
	public static $Default;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\DesignerCategoryAttribute
	 */
	public static $Form;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\DesignerCategoryAttribute
	 */
	public static $Generic;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Category;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses DesignerCategoryAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses DesignerCategoryAttributeOverride::__construct_2 <br>public , args: ($category)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}