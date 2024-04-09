<?php
namespace System\ComponentModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SROverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $category
	 */
	#[MethodOverride]public function __construct_2 ($category){}
}
class CategoryAttribute extends \System\Attribute
{
	use SROverride;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $Action;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $Appearance;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $Asynchronous;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $Behavior;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $Data;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $Default;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $Design;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $DragDrop;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $Focus;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $Format;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $Key;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $Layout;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $Mouse;
	/**
	 * @property
	 * @var \System\ComponentModel\CategoryAttribute
	 * @since readonly
	 */
	public $WindowStyle;
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
	 * @param \System\String|string $value
	 * @return \System\String|string
	 */
	protected function GetLocalizedString($value){}
	/**
	 * @uses CategoryAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses CategoryAttributeOverride::__construct_2 <br>public , args: ($category)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}