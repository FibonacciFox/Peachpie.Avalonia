<?php
namespace System\Runtime\Intrinsics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Vector256_1MethodsOverride
{
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function op_Multiply_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function op_Multiply_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function op_Multiply_3($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function ToString_2($format, $formatProvider){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Vector256_1 extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Runtime\Intrinsics\Vector256_1[T]
	 * @property
	 */
	public readonly $AllBitsSet;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @var \System\Runtime\Intrinsics\Vector256_1[T]
	 * @property
	 */
	public readonly $Zero;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Item;
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function get_AllBitsSet(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_Count(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsSupported(){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function get_Zero(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_DisplayString(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Runtime\Intrinsics\T
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function op_Addition($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function op_BitwiseAnd($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function op_BitwiseOr($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function op_Division($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function op_ExclusiveOr($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses Vector256_1MethodsOverride::op_Multiply_1 ($left, $right)
	 * @uses Vector256_1MethodsOverride::op_Multiply_2 ($left, $right)
	 * @uses Vector256_1MethodsOverride::op_Multiply_3 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $vector
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function op_OnesComplement($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function op_Subtraction($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $vector
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function op_UnaryNegation($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function op_UnaryPlus($value){}
	/**
	 * @uses Vector256_1MethodsOverride::Equals_1 ($obj)
	 * @uses Vector256_1MethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses Vector256_1MethodsOverride::ToString_1 ()
	 * @uses Vector256_1MethodsOverride::ToString_2 ($format, $formatProvider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
}
