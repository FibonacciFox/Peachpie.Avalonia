<?php
namespace Avalonia\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BindingValue_1Override {
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
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride]public static function FromUntyped_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride]public static function FromUntyped_2 ($value, $targetType){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride]public static function op_Implicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Data\Optional_1 $optional [generic: T]
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride]public static function op_Implicit_2 ($optional){}
	/**
	 * @deprecated
	 * @param \System\Exception $e
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride]public static function BindingError_1 ($e){}
	/**
	 * @deprecated
	 * @param \System\Exception $e
	 * @param \T|object $fallbackValue
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride]public static function BindingError_2 ($e, $fallbackValue){}
	/**
	 * @deprecated
	 * @param \System\Exception $e
	 * @param \Avalonia\Data\Optional_1 $fallbackValue [generic: T]
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride]public static function BindingError_3 ($e, $fallbackValue){}
	/**
	 * @deprecated
	 * @param \System\Exception $e
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride]public static function DataValidationError_1 ($e){}
	/**
	 * @deprecated
	 * @param \System\Exception $e
	 * @param \T|object $fallbackValue
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride]public static function DataValidationError_2 ($e, $fallbackValue){}
	/**
	 * @deprecated
	 * @param \System\Exception $e
	 * @param \Avalonia\Data\Optional_1 $fallbackValue [generic: T]
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride]public static function DataValidationError_3 ($e, $fallbackValue){}
}
final class BindingValue_1 extends \System\ValueType implements
	\System\IEquatable_1
{
	use BindingValue_1Override;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasError;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasValue;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingValueType
	 * @since readonly
	 */
	public $Type;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $Error;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingValue_1[T]
	 * @since readonly
	 */
	public $Unset;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingValue_1[T]
	 * @since readonly
	 */
	public $DoNothing;
	/**
	 * @return \Avalonia\Data\Optional_1[T]
	 */
	public function ToOptional(){}
	/**
	 * @return \System\Object|object
	 */
	public function ToUntyped(){}
	/**
	 * @param \T|object $value
	 * @return \Avalonia\Data\BindingValue_1[T]
	 */
	public function WithValue($value){}
	/**
	 * @uses BindingValue_1Override::GetValueOrDefault_1 <br>public , args: ()<br>
	 * @uses BindingValue_1Override::GetValueOrDefault_2 <br>public , args: ($defaultValue)<br>
	 * @uses BindingValue_1Override::GetValueOrDefault_3 <br>public , args: ()<br>
	 * @uses BindingValue_1Override::GetValueOrDefault_4 <br>public , args: ($defaultValue)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\TResult|mixed|\override
	 */
	#[MethodOverridePublic]function GetValueOrDefault (\override ...$args){}
	/**
	 * @uses BindingValue_1Override::FromUntyped_1 <br>public , args: ($value)<br>
	 * @uses BindingValue_1Override::FromUntyped_2 <br>public , args: ($value, $targetType)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Data\BindingValue_1|mixed|\override
	 */
	#[MethodOverridePublic]function FromUntyped (\override ...$args){}
	/**
	 * @uses BindingValue_1Override::op_Implicit_1 <br>public , args: ($value)<br>
	 * @uses BindingValue_1Override::op_Implicit_2 <br>public , args: ($optional)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Data\BindingValue_1|mixed|\override
	 */
	#[MethodOverridePublic]function op_Implicit (\override ...$args){}
	/**
	 * @uses BindingValue_1Override::BindingError_1 <br>public , args: ($e)<br>
	 * @uses BindingValue_1Override::BindingError_2 <br>public , args: ($e, $fallbackValue)<br>
	 * @uses BindingValue_1Override::BindingError_3 <br>public , args: ($e, $fallbackValue)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Data\BindingValue_1|mixed|\override
	 */
	#[MethodOverridePublic]function BindingError (\override ...$args){}
	/**
	 * @uses BindingValue_1Override::DataValidationError_1 <br>public , args: ($e)<br>
	 * @uses BindingValue_1Override::DataValidationError_2 <br>public , args: ($e, $fallbackValue)<br>
	 * @uses BindingValue_1Override::DataValidationError_3 <br>public , args: ($e, $fallbackValue)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Data\BindingValue_1|mixed|\override
	 */
	#[MethodOverridePublic]function DataValidationError (\override ...$args){}
	private static function ValidateValue($value){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Data\BindingValue_1 $left [generic: T]
	 * @param \Avalonia\Data\BindingValue_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Data\BindingValue_1 $left [generic: T]
	 * @param \Avalonia\Data\BindingValue_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \T|object $value
	 */
	public function __construct($value){}
}