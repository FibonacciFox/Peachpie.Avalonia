<?php
namespace System\ComponentModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InvalidEnumArgumentExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Boolean|bool $needParenthesis
	 */
	#[MethodOverride]public function __construct_2 ($needParenthesis){}
}
final class ParenthesizePropertyNameAttribute extends \System\Attribute
{
	use InvalidEnumArgumentExceptionOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\ParenthesizePropertyNameAttribute
	 */
	public static $Default;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $NeedParenthesis;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses ParenthesizePropertyNameAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ParenthesizePropertyNameAttributeOverride::__construct_2 <br>public , args: ($needParenthesis)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}