<?php
namespace System\Runtime\Intrinsics\Arm;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArmBaseMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LeadingZeroCount_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LeadingZeroCount_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ReverseElementBits_1($value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function ReverseElementBits_2($value){}
}
/**
 */
class ArmBase extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsSupported(){}
	/**
	 * @uses ArmBaseMethodsOverride::LeadingZeroCount_1 ($value)
	 * @uses ArmBaseMethodsOverride::LeadingZeroCount_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LeadingZeroCount(mixed ...$args){}
	/**
	 * @uses ArmBaseMethodsOverride::ReverseElementBits_1 ($value)
	 * @uses ArmBaseMethodsOverride::ReverseElementBits_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReverseElementBits(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public static function Yield(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
