<?php
namespace Avalonia\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Optional_1Override {
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
	/**
	 * @deprecated
	 * @return \TResult
	 */
	#[MethodOverride]public function GetValueOrDefault_3 (){}
	/**
	 * @deprecated
	 * @param \TResult $defaultValue
	 * @return \TResult
	 */
	#[MethodOverride]public function GetValueOrDefault_4 ($defaultValue){}
}
final class Optional_1 extends \System\ValueType implements
	\System\IEquatable_1
{
	use Optional_1Override;
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
	 * @property
	 * @var \Avalonia\Data\Optional_1[T]
	 * @since readonly
	 */
	public $Empty;
	/**
	 * @return \Avalonia\Data\Optional_1[System\Object]
	 */
	public function ToObject(){}
	/**
	 * @uses Optional_1Override::GetValueOrDefault_1 <br>public , args: ()<br>
	 * @uses Optional_1Override::GetValueOrDefault_2 <br>public , args: ($defaultValue)<br>
	 * @uses Optional_1Override::GetValueOrDefault_3 <br>public , args: ()<br>
	 * @uses Optional_1Override::GetValueOrDefault_4 <br>public , args: ($defaultValue)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\TResult|mixed|\override
	 */
	#[MethodOverridePublic]function GetValueOrDefault (\override ...$args){}
	/**
	 * @param \T|object $value
	 * @return \Avalonia\Data\Optional_1[T]
	 */
	public static function op_Implicit($value){}
	/**
	 * @param \Avalonia\Data\Optional_1 $x [generic: T]
	 * @param \Avalonia\Data\Optional_1 $y [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($x, $y){}
	/**
	 * @param \Avalonia\Data\Optional_1 $x [generic: T]
	 * @param \Avalonia\Data\Optional_1 $y [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($x, $y){}
	/**
	 * @param \T|object $value
	 */
	public function __construct($value){}
}