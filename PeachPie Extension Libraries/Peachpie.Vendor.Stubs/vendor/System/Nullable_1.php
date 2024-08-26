<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Nullable_1Override {
	/**
	 * @deprecated
	 * @return \T|object
	 */
	#[MethodOverride]public function GetValueOrDefault_1 (){}
	/**
	 * @deprecated
	 * @param \T|object $defaultValue
	 * @return \T|object
	 */
	#[MethodOverride]public function GetValueOrDefault_2 ($defaultValue){}
}
final class Nullable_1 extends \System\ValueType
{
	use Nullable_1Override;
	/**
	 * @field
	 * @var \T|object
	 */
	protected $value;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasValue;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @uses Nullable_1Override::GetValueOrDefault_1 <br>public , args: ()<br>
	 * @uses Nullable_1Override::GetValueOrDefault_2 <br>public , args: ($defaultValue)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetValueOrDefault (\override ...$args){}
	/**
	 * @param \T|object $value
	 * @return \System\Nullable_1[T]
	 */
	public static function op_Implicit($value){}
	/**
	 * @param \System\Nullable_1 $value [generic: T]
	 * @return \T|object
	 */
	public static function op_Explicit($value){}
	/**
	 * @param \T|object $value
	 */
	public function __construct($value){}
}