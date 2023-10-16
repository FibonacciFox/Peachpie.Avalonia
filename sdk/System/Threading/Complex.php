<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ComplexMethodsOverride
{
	/**
	 * @return \System\Threading\Complex
	 */
	#[MethodOverride] public static function op_Division_1($complex, $scalar){}
	/**
	 * @return \System\Threading\Complex
	 */
	#[MethodOverride] public static function op_Division_2($lhs, $rhs){}
}
/**
 */
class Complex extends \System\ValueType
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Imaginary;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Real;
	/**
	 * @return \System\Double|double
	 */
	public  function get_Imaginary(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Real(){}
	/**
	 * @param \System\Double|double $scalar
	 * @param \System\Threading\Complex $complex
	 * @return \System\Threading\Complex
	 */
	public static function op_Multiply($scalar, $complex){}
	/**
	 * @uses ComplexMethodsOverride::op_Division_1 ($complex, $scalar)
	 * @uses ComplexMethodsOverride::op_Division_2 ($lhs, $rhs)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Division(mixed ...$args){}
	/**
	 * @param \System\Threading\Complex $lhs
	 * @param \System\Threading\Complex $rhs
	 * @return \System\Threading\Complex
	 */
	public static function op_Subtraction($lhs, $rhs){}
	/**
	 * @return \System\Double|double
	 */
	public  function Abs(){}
}
