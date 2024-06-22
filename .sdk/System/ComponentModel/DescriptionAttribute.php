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
	 * @param \System\String|string $description
	 */
	#[MethodOverride]public function __construct_2 ($description){}
}
class DescriptionAttribute extends \System\Attribute
{
	use ComponentCollectionOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\DescriptionAttribute
	 */
	public static $Default;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Description;
	/**
	 * @property
	 * @var \System\String|string
	 */
	protected $DescriptionValue;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses DescriptionAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses DescriptionAttributeOverride::__construct_2 <br>public , args: ($description)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}