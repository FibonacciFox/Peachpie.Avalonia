<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MathFMethodsOverride
{
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Log_1($x){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Log_2($x, $y){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function SinCos_1($x){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function SinCos_2($x, $sin, $cos){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Round_1($x){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Round_2($x, $digits){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Round_3($x, $mode){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Round_4($x, $digits, $mode){}
}
/**
 */
class MathF extends \System\Object
{
	/**
	 * @var \System\Single
	 * @field
	 */
	public $E;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $PI;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $Tau;
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Acos($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Acosh($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Asin($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Asinh($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Atan($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Atanh($x){}
	/**
	 * @param \System\Single $y
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Atan2($y, $x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Cbrt($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Ceiling($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Cos($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Cosh($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Exp($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Floor($x){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @param \System\Single $z
	 * @return \System\Single
	 */
	public static function FusedMultiplyAdd($x, $y, $z){}
	/**
	 * @uses MathFMethodsOverride::Log_1 ($x)
	 * @uses MathFMethodsOverride::Log_2 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Log(mixed ...$args){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Log2($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Log10($x){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function Pow($x, $y){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Sin($x){}
	/**
	 * @uses MathFMethodsOverride::SinCos_1 ($x)
	 * @uses MathFMethodsOverride::SinCos_2 ($x, $sin, $cos)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SinCos(mixed ...$args){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Sinh($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Sqrt($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Tan($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Tanh($x){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single* $intptr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ModF($x, $intptr){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Abs($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function BitDecrement($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function BitIncrement($x){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function CopySign($x, $y){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function IEEERemainder($x, $y){}
	/**
	 * @param \System\Single $x
	 * @return \System\Int32|int
	 */
	public static function ILogB($x){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function Max($x, $y){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function MaxMagnitude($x, $y){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function Min($x, $y){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function MinMagnitude($x, $y){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function ReciprocalEstimate($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function ReciprocalSqrtEstimate($x){}
	/**
	 * @uses MathFMethodsOverride::Round_1 ($x)
	 * @uses MathFMethodsOverride::Round_2 ($x, $digits)
	 * @uses MathFMethodsOverride::Round_3 ($x, $mode)
	 * @uses MathFMethodsOverride::Round_4 ($x, $digits, $mode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Round(mixed ...$args){}
	/**
	 * @param \System\Single $x
	 * @return \System\Int32|int
	 */
	public static function Sign($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Truncate($x){}
	/**
	 * @param \System\Single $x
	 * @param \System\Int32|int $n
	 * @return \System\Single
	 */
	public static function ScaleB($x, $n){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
