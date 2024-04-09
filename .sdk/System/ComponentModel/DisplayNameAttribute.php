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
	 * @param \System\String|string $displayName
	 */
	#[MethodOverride]public function __construct_2 ($displayName){}
}
class DisplayNameAttribute extends \System\Attribute
{
	use ComponentCollectionOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\DisplayNameAttribute
	 */
	public static $Default;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DisplayName;
	/**
	 * @property
	 * @var \System\String|string
	 */
	protected $DisplayNameValue;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses DisplayNameAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses DisplayNameAttributeOverride::__construct_2 <br>public , args: ($displayName)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}