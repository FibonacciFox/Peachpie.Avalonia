<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ComplexOverride {
	/**
	 * @deprecated
	 * @param \System\Threading\PortableThreadPool+HillClimbing+Complex $complex
	 * @param \System\Double|double $scalar
	 * @return \System\Threading\PortableThreadPool
	 */
	#[MethodOverride]public static function op_Division_1 ($complex, $scalar){}
	/**
	 * @deprecated
	 * @param \System\Threading\PortableThreadPool+HillClimbing+Complex $lhs
	 * @param \System\Threading\PortableThreadPool+HillClimbing+Complex $rhs
	 * @return \System\Threading\PortableThreadPool
	 */
	#[MethodOverride]public static function op_Division_2 ($lhs, $rhs){}
}
final class Complex extends \System\ValueType
{
	use ComplexOverride;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Imaginary;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Real;
	/**
	 * @param \System\Double|double $scalar
	 * @param \System\Threading\PortableThreadPool+HillClimbing+Complex $complex
	 * @return \System\Threading\PortableThreadPool+HillClimbing+Complex
	 */
	public static function op_Multiply($scalar, $complex){}
	/**
	 * @uses ComplexOverride::op_Division_1 <br>public , args: ($complex, $scalar)<br>
	 * @uses ComplexOverride::op_Division_2 <br>public , args: ($lhs, $rhs)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\PortableThreadPool|mixed|\override
	 */
	#[MethodOverridePublic]function op_Division (\override ...$args){}
	/**
	 * @param \System\Threading\PortableThreadPool+HillClimbing+Complex $lhs
	 * @param \System\Threading\PortableThreadPool+HillClimbing+Complex $rhs
	 * @return \System\Threading\PortableThreadPool+HillClimbing+Complex
	 */
	public static function op_Subtraction($lhs, $rhs){}
	/**
	 * @return \System\Double|double
	 */
	public function Abs(){}
	/**
	 * @param \System\Double|double $real
	 * @param \System\Double|double $imaginary
	 */
	public function __construct($real, $imaginary){}
}