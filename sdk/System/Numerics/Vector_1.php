<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Vector_1MethodsOverride
{
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Explicit_1($value){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Explicit_2($value){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Explicit_3($value){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Explicit_4($value){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Explicit_5($value){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Explicit_6($value){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Explicit_7($value){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Explicit_8($value){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Explicit_9($value){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Explicit_10($value){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Explicit_11($value){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Explicit_12($value){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Multiply_1($left, $right){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Multiply_2($value, $factor){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] public static function op_Multiply_3($factor, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($destination){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($destination, $startIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_3($destination){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_4($destination){}
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
	#[MethodOverride] public  function ToString_2($format){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_3($format, $formatProvider){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryCopyTo_1($destination){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryCopyTo_2($destination){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Vector_1 extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\IFormattable
{
	/**
	 * @var \System\UInt64
	 * @field
	 */
	protected readonly $_00;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	protected readonly $_01;
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
	 * @var \System\Numerics\Vector_1[T]
	 * @property
	 */
	public readonly $One;
	/**
	 * @var \System\Numerics\Vector_1[T]
	 * @property
	 */
	public readonly $Zero;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Item;
	/**
	 * @return \System\Numerics\Vector_1
	 */
	protected static function get_AllBitsSet(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_Count(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsSupported(){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	public static function get_One(){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	public static function get_Zero(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_DisplayString(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Numerics\T
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Numerics\Vector_1 $left
	 * @param \System\Numerics\Vector_1 $right
	 * @return \System\Numerics\Vector_1
	 */
	public static function op_Addition($left, $right){}
	/**
	 * @param \System\Numerics\Vector_1 $left
	 * @param \System\Numerics\Vector_1 $right
	 * @return \System\Numerics\Vector_1
	 */
	public static function op_BitwiseAnd($left, $right){}
	/**
	 * @param \System\Numerics\Vector_1 $left
	 * @param \System\Numerics\Vector_1 $right
	 * @return \System\Numerics\Vector_1
	 */
	public static function op_BitwiseOr($left, $right){}
	/**
	 * @param \System\Numerics\Vector_1 $left
	 * @param \System\Numerics\Vector_1 $right
	 * @return \System\Numerics\Vector_1
	 */
	public static function op_Division($left, $right){}
	/**
	 * @param \System\Numerics\Vector_1 $left
	 * @param \System\Numerics\Vector_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Numerics\Vector_1 $left
	 * @param \System\Numerics\Vector_1 $right
	 * @return \System\Numerics\Vector_1
	 */
	public static function op_ExclusiveOr($left, $right){}
	/**
	 * @uses Vector_1MethodsOverride::op_Explicit_1 ($value)
	 * @uses Vector_1MethodsOverride::op_Explicit_2 ($value)
	 * @uses Vector_1MethodsOverride::op_Explicit_3 ($value)
	 * @uses Vector_1MethodsOverride::op_Explicit_4 ($value)
	 * @uses Vector_1MethodsOverride::op_Explicit_5 ($value)
	 * @uses Vector_1MethodsOverride::op_Explicit_6 ($value)
	 * @uses Vector_1MethodsOverride::op_Explicit_7 ($value)
	 * @uses Vector_1MethodsOverride::op_Explicit_8 ($value)
	 * @uses Vector_1MethodsOverride::op_Explicit_9 ($value)
	 * @uses Vector_1MethodsOverride::op_Explicit_10 ($value)
	 * @uses Vector_1MethodsOverride::op_Explicit_11 ($value)
	 * @uses Vector_1MethodsOverride::op_Explicit_12 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Explicit(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector_1 $left
	 * @param \System\Numerics\Vector_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses Vector_1MethodsOverride::op_Multiply_1 ($left, $right)
	 * @uses Vector_1MethodsOverride::op_Multiply_2 ($value, $factor)
	 * @uses Vector_1MethodsOverride::op_Multiply_3 ($factor, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @param \System\Numerics\Vector_1 $value
	 * @return \System\Numerics\Vector_1
	 */
	public static function op_OnesComplement($value){}
	/**
	 * @param \System\Numerics\Vector_1 $left
	 * @param \System\Numerics\Vector_1 $right
	 * @return \System\Numerics\Vector_1
	 */
	public static function op_Subtraction($left, $right){}
	/**
	 * @param \System\Numerics\Vector_1 $value
	 * @return \System\Numerics\Vector_1
	 */
	public static function op_UnaryNegation($value){}
	/**
	 * @uses Vector_1MethodsOverride::CopyTo_1 ($destination)
	 * @uses Vector_1MethodsOverride::CopyTo_2 ($destination, $startIndex)
	 * @uses Vector_1MethodsOverride::CopyTo_3 ($destination)
	 * @uses Vector_1MethodsOverride::CopyTo_4 ($destination)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses Vector_1MethodsOverride::Equals_1 ($obj)
	 * @uses Vector_1MethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses Vector_1MethodsOverride::ToString_1 ()
	 * @uses Vector_1MethodsOverride::ToString_2 ($format)
	 * @uses Vector_1MethodsOverride::ToString_3 ($format, $formatProvider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses Vector_1MethodsOverride::TryCopyTo_1 ($destination)
	 * @uses Vector_1MethodsOverride::TryCopyTo_2 ($destination)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryCopyTo(mixed ...$args){}
}
