<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MathMethodsOverride
{
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Ceiling_1($a){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Ceiling_2($d){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Floor_1($d){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Floor_2($d){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Log_1($d){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Log_2($a, $newBase){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function SinCos_1($x){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function SinCos_2($x, $sin, $cos){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function Abs_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Abs_2($value){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Abs_3($value){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Abs_4($value){}
	/**
	 * @return \System\SByte
	 */
	#[MethodOverride] public static function Abs_5($value){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Abs_6($value){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Abs_7($value){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Abs_8($value){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function BigMul_1($a, $b){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function BigMul_2($a, $b, $low){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function BigMul_3($a, $b, $low){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function DivRem_1($a, $b, $result){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function DivRem_2($a, $b, $result){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function DivRem_3($left, $right){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function DivRem_4($left, $right){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function DivRem_5($left, $right){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function DivRem_6($left, $right){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function DivRem_7($left, $right){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function DivRem_8($left, $right){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function DivRem_9($left, $right){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function DivRem_10($left, $right){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function DivRem_11($left, $right){}
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] public static function DivRem_12($left, $right){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] public static function Clamp_1($value, $min, $max){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Clamp_2($value, $min, $max){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Clamp_3($value, $min, $max){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function Clamp_4($value, $min, $max){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Clamp_5($value, $min, $max){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Clamp_6($value, $min, $max){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Clamp_7($value, $min, $max){}
	/**
	 * @return \System\SByte
	 */
	#[MethodOverride] public static function Clamp_8($value, $min, $max){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Clamp_9($value, $min, $max){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] public static function Clamp_10($value, $min, $max){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function Clamp_11($value, $min, $max){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function Clamp_12($value, $min, $max){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function Clamp_13($value, $min, $max){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] public static function Max_1($val1, $val2){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Max_2($val1, $val2){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Max_3($val1, $val2){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function Max_4($val1, $val2){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Max_5($val1, $val2){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Max_6($val1, $val2){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Max_7($val1, $val2){}
	/**
	 * @return \System\SByte
	 */
	#[MethodOverride] public static function Max_8($val1, $val2){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Max_9($val1, $val2){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] public static function Max_10($val1, $val2){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function Max_11($val1, $val2){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function Max_12($val1, $val2){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function Max_13($val1, $val2){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] public static function Min_1($val1, $val2){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Min_2($val1, $val2){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Min_3($val1, $val2){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function Min_4($val1, $val2){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Min_5($val1, $val2){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Min_6($val1, $val2){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Min_7($val1, $val2){}
	/**
	 * @return \System\SByte
	 */
	#[MethodOverride] public static function Min_8($val1, $val2){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Min_9($val1, $val2){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] public static function Min_10($val1, $val2){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function Min_11($val1, $val2){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function Min_12($val1, $val2){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function Min_13($val1, $val2){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Round_1($d){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Round_2($d, $decimals){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Round_3($d, $mode){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Round_4($d, $decimals, $mode){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Round_5($a){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Round_6($value, $digits){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Round_7($value, $mode){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Round_8($value, $digits, $mode){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Sign_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Sign_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Sign_3($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Sign_4($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Sign_5($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Sign_6($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Sign_7($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Sign_8($value){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Truncate_1($d){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Truncate_2($d){}
}
/**
 */
class Math extends \System\Object
{
	/**
	 * @var \System\Double
	 * @field
	 */
	public $E;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $PI;
	/**
	 * @var \System\Double
	 * @field
	 */
	public $Tau;
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function Acos($d){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function Acosh($d){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function Asin($d){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function Asinh($d){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function Atan($d){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function Atanh($d){}
	/**
	 * @param \System\Double|double $y
	 * @param \System\Double|double $x
	 * @return \System\Double|double
	 */
	public static function Atan2($y, $x){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function Cbrt($d){}
	/**
	 * @uses MathMethodsOverride::Ceiling_1 ($a)
	 * @uses MathMethodsOverride::Ceiling_2 ($d)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Ceiling(mixed ...$args){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function Cos($d){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Double|double
	 */
	public static function Cosh($value){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function Exp($d){}
	/**
	 * @uses MathMethodsOverride::Floor_1 ($d)
	 * @uses MathMethodsOverride::Floor_2 ($d)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Floor(mixed ...$args){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @param \System\Double|double $z
	 * @return \System\Double|double
	 */
	public static function FusedMultiplyAdd($x, $y, $z){}
	/**
	 * @uses MathMethodsOverride::Log_1 ($d)
	 * @uses MathMethodsOverride::Log_2 ($a, $newBase)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Log(mixed ...$args){}
	/**
	 * @param \System\Double|double $x
	 * @return \System\Double|double
	 */
	public static function Log2($x){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function Log10($d){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Double|double
	 */
	public static function Pow($x, $y){}
	/**
	 * @param \System\Double|double $a
	 * @return \System\Double|double
	 */
	public static function Sin($a){}
	/**
	 * @uses MathMethodsOverride::SinCos_1 ($x)
	 * @uses MathMethodsOverride::SinCos_2 ($x, $sin, $cos)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SinCos(mixed ...$args){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Double|double
	 */
	public static function Sinh($value){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function Sqrt($d){}
	/**
	 * @param \System\Double|double $a
	 * @return \System\Double|double
	 */
	public static function Tan($a){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Double|double
	 */
	public static function Tanh($value){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double* $intptr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ModF($x, $intptr){}
	/**
	 * @uses MathMethodsOverride::Abs_1 ($value)
	 * @uses MathMethodsOverride::Abs_2 ($value)
	 * @uses MathMethodsOverride::Abs_3 ($value)
	 * @uses MathMethodsOverride::Abs_4 ($value)
	 * @uses MathMethodsOverride::Abs_5 ($value)
	 * @uses MathMethodsOverride::Abs_6 ($value)
	 * @uses MathMethodsOverride::Abs_7 ($value)
	 * @uses MathMethodsOverride::Abs_8 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Abs(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowNegateTwosCompOverflow(){}
	/**
	 * @uses MathMethodsOverride::BigMul_1 ($a, $b)
	 * @uses MathMethodsOverride::BigMul_2 ($a, $b, $low)
	 * @uses MathMethodsOverride::BigMul_3 ($a, $b, $low)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BigMul(mixed ...$args){}
	/**
	 * @param \System\Double|double $x
	 * @return \System\Double|double
	 */
	public static function BitDecrement($x){}
	/**
	 * @param \System\Double|double $x
	 * @return \System\Double|double
	 */
	public static function BitIncrement($x){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Double|double
	 */
	public static function CopySign($x, $y){}
	/**
	 * @uses MathMethodsOverride::DivRem_1 ($a, $b, $result)
	 * @uses MathMethodsOverride::DivRem_2 ($a, $b, $result)
	 * @uses MathMethodsOverride::DivRem_3 ($left, $right)
	 * @uses MathMethodsOverride::DivRem_4 ($left, $right)
	 * @uses MathMethodsOverride::DivRem_5 ($left, $right)
	 * @uses MathMethodsOverride::DivRem_6 ($left, $right)
	 * @uses MathMethodsOverride::DivRem_7 ($left, $right)
	 * @uses MathMethodsOverride::DivRem_8 ($left, $right)
	 * @uses MathMethodsOverride::DivRem_9 ($left, $right)
	 * @uses MathMethodsOverride::DivRem_10 ($left, $right)
	 * @uses MathMethodsOverride::DivRem_11 ($left, $right)
	 * @uses MathMethodsOverride::DivRem_12 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DivRem(mixed ...$args){}
	/**
	 * @uses MathMethodsOverride::Clamp_1 ($value, $min, $max)
	 * @uses MathMethodsOverride::Clamp_2 ($value, $min, $max)
	 * @uses MathMethodsOverride::Clamp_3 ($value, $min, $max)
	 * @uses MathMethodsOverride::Clamp_4 ($value, $min, $max)
	 * @uses MathMethodsOverride::Clamp_5 ($value, $min, $max)
	 * @uses MathMethodsOverride::Clamp_6 ($value, $min, $max)
	 * @uses MathMethodsOverride::Clamp_7 ($value, $min, $max)
	 * @uses MathMethodsOverride::Clamp_8 ($value, $min, $max)
	 * @uses MathMethodsOverride::Clamp_9 ($value, $min, $max)
	 * @uses MathMethodsOverride::Clamp_10 ($value, $min, $max)
	 * @uses MathMethodsOverride::Clamp_11 ($value, $min, $max)
	 * @uses MathMethodsOverride::Clamp_12 ($value, $min, $max)
	 * @uses MathMethodsOverride::Clamp_13 ($value, $min, $max)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Clamp(mixed ...$args){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Double|double
	 */
	public static function IEEERemainder($x, $y){}
	/**
	 * @param \System\Double|double $x
	 * @return \System\Int32|int
	 */
	public static function ILogB($x){}
	/**
	 * @uses MathMethodsOverride::Max_1 ($val1, $val2)
	 * @uses MathMethodsOverride::Max_2 ($val1, $val2)
	 * @uses MathMethodsOverride::Max_3 ($val1, $val2)
	 * @uses MathMethodsOverride::Max_4 ($val1, $val2)
	 * @uses MathMethodsOverride::Max_5 ($val1, $val2)
	 * @uses MathMethodsOverride::Max_6 ($val1, $val2)
	 * @uses MathMethodsOverride::Max_7 ($val1, $val2)
	 * @uses MathMethodsOverride::Max_8 ($val1, $val2)
	 * @uses MathMethodsOverride::Max_9 ($val1, $val2)
	 * @uses MathMethodsOverride::Max_10 ($val1, $val2)
	 * @uses MathMethodsOverride::Max_11 ($val1, $val2)
	 * @uses MathMethodsOverride::Max_12 ($val1, $val2)
	 * @uses MathMethodsOverride::Max_13 ($val1, $val2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Max(mixed ...$args){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Double|double
	 */
	public static function MaxMagnitude($x, $y){}
	/**
	 * @uses MathMethodsOverride::Min_1 ($val1, $val2)
	 * @uses MathMethodsOverride::Min_2 ($val1, $val2)
	 * @uses MathMethodsOverride::Min_3 ($val1, $val2)
	 * @uses MathMethodsOverride::Min_4 ($val1, $val2)
	 * @uses MathMethodsOverride::Min_5 ($val1, $val2)
	 * @uses MathMethodsOverride::Min_6 ($val1, $val2)
	 * @uses MathMethodsOverride::Min_7 ($val1, $val2)
	 * @uses MathMethodsOverride::Min_8 ($val1, $val2)
	 * @uses MathMethodsOverride::Min_9 ($val1, $val2)
	 * @uses MathMethodsOverride::Min_10 ($val1, $val2)
	 * @uses MathMethodsOverride::Min_11 ($val1, $val2)
	 * @uses MathMethodsOverride::Min_12 ($val1, $val2)
	 * @uses MathMethodsOverride::Min_13 ($val1, $val2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Min(mixed ...$args){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Double|double
	 */
	public static function MinMagnitude($x, $y){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function ReciprocalEstimate($d){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	public static function ReciprocalSqrtEstimate($d){}
	/**
	 * @uses MathMethodsOverride::Round_1 ($d)
	 * @uses MathMethodsOverride::Round_2 ($d, $decimals)
	 * @uses MathMethodsOverride::Round_3 ($d, $mode)
	 * @uses MathMethodsOverride::Round_4 ($d, $decimals, $mode)
	 * @uses MathMethodsOverride::Round_5 ($a)
	 * @uses MathMethodsOverride::Round_6 ($value, $digits)
	 * @uses MathMethodsOverride::Round_7 ($value, $mode)
	 * @uses MathMethodsOverride::Round_8 ($value, $digits, $mode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Round(mixed ...$args){}
	/**
	 * @uses MathMethodsOverride::Sign_1 ($value)
	 * @uses MathMethodsOverride::Sign_2 ($value)
	 * @uses MathMethodsOverride::Sign_3 ($value)
	 * @uses MathMethodsOverride::Sign_4 ($value)
	 * @uses MathMethodsOverride::Sign_5 ($value)
	 * @uses MathMethodsOverride::Sign_6 ($value)
	 * @uses MathMethodsOverride::Sign_7 ($value)
	 * @uses MathMethodsOverride::Sign_8 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Sign(mixed ...$args){}
	/**
	 * @uses MathMethodsOverride::Truncate_1 ($d)
	 * @uses MathMethodsOverride::Truncate_2 ($d)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Truncate(mixed ...$args){}
	/**
	 * @param \System\T $min
	 * @param \System\T $max
	 * @return \System\Void|void
	 */
	protected static function ThrowMinMaxException($min, $max){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Int32|int $n
	 * @return \System\Double|double
	 */
	public static function ScaleB($x, $n){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
