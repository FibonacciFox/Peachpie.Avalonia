<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MathOverride {
	/**
	 * @deprecated
	 * @param \System\Double|double $a
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Ceiling_1 ($a){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Ceiling_2 ($d){}
	/**
	 * @deprecated
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Floor_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Floor_2 ($d){}
	/**
	 * @deprecated
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Log_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\Double|double $a
	 * @param \System\Double|double $newBase
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Log_2 ($a, $newBase){}
	/**
	 * @deprecated
	 * @param \System\Double|double $x
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function SinCos_1 ($x){}
	/**
	 * @deprecated
	 * @param \System\Double|double $x
	 * @param \System\Double* $sin
	 * @param \System\Double* $cos
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function SinCos_2 ($x, $sin, $cos){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function Abs_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Abs_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Abs_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $value
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function Abs_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function Abs_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Abs_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Abs_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Abs_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $a
	 * @param \System\Int32|int $b
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function BigMul_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $a
	 * @param \System\UInt64 $b
	 * @param \System\UInt64& &$low
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function BigMul_2 ($a, $b, &$low){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $a
	 * @param \System\Int64|int $b
	 * @param \System\Int64& &$low
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function BigMul_3 ($a, $b, &$low){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $a
	 * @param \System\Int32|int $b
	 * @param \System\Int32& &$result
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function DivRem_1 ($a, $b, &$result){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $a
	 * @param \System\Int64|int $b
	 * @param \System\Int64& &$result
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function DivRem_2 ($a, $b, &$result){}
	/**
	 * @deprecated
	 * @param \System\SByte $left
	 * @param \System\SByte $right
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function DivRem_3 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Byte $left
	 * @param \System\Byte $right
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function DivRem_4 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Int16 $left
	 * @param \System\Int16 $right
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function DivRem_5 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $left
	 * @param \System\UInt16 $right
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function DivRem_6 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function DivRem_7 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $left
	 * @param \System\UInt32 $right
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function DivRem_8 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $left
	 * @param \System\Int64|int $right
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function DivRem_9 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $left
	 * @param \System\UInt64 $right
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function DivRem_10 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function DivRem_11 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function DivRem_12 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Byte $value
	 * @param \System\Byte $min
	 * @param \System\Byte $max
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function Clamp_1 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @param \System\Decimal $min
	 * @param \System\Decimal $max
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Clamp_2 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @param \System\Double|double $min
	 * @param \System\Double|double $max
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Clamp_3 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @param \System\Int16 $min
	 * @param \System\Int16 $max
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function Clamp_4 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $min
	 * @param \System\Int32|int $max
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Clamp_5 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @param \System\Int64|int $min
	 * @param \System\Int64|int $max
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Clamp_6 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $value
	 * @param \System\IntPtr $min
	 * @param \System\IntPtr $max
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function Clamp_7 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @param \System\SByte $min
	 * @param \System\SByte $max
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function Clamp_8 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @param \System\Single $min
	 * @param \System\Single $max
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Clamp_9 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $value
	 * @param \System\UInt16 $min
	 * @param \System\UInt16 $max
	 * @return \System\UInt16
	 */
	#[MethodOverride]public static function Clamp_10 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @param \System\UInt32 $min
	 * @param \System\UInt32 $max
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function Clamp_11 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @param \System\UInt64 $min
	 * @param \System\UInt64 $max
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function Clamp_12 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $value
	 * @param \System\UIntPtr $min
	 * @param \System\UIntPtr $max
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function Clamp_13 ($value, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\Byte $val1
	 * @param \System\Byte $val2
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function Max_1 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Decimal $val1
	 * @param \System\Decimal $val2
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Max_2 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Double|double $val1
	 * @param \System\Double|double $val2
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Max_3 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Int16 $val1
	 * @param \System\Int16 $val2
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function Max_4 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $val1
	 * @param \System\Int32|int $val2
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Max_5 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $val1
	 * @param \System\Int64|int $val2
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Max_6 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $val1
	 * @param \System\IntPtr $val2
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function Max_7 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\SByte $val1
	 * @param \System\SByte $val2
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function Max_8 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Single $val1
	 * @param \System\Single $val2
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Max_9 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $val1
	 * @param \System\UInt16 $val2
	 * @return \System\UInt16
	 */
	#[MethodOverride]public static function Max_10 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $val1
	 * @param \System\UInt32 $val2
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function Max_11 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $val1
	 * @param \System\UInt64 $val2
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function Max_12 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $val1
	 * @param \System\UIntPtr $val2
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function Max_13 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Byte $val1
	 * @param \System\Byte $val2
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function Min_1 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Decimal $val1
	 * @param \System\Decimal $val2
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Min_2 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Double|double $val1
	 * @param \System\Double|double $val2
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Min_3 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Int16 $val1
	 * @param \System\Int16 $val2
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function Min_4 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $val1
	 * @param \System\Int32|int $val2
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Min_5 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $val1
	 * @param \System\Int64|int $val2
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Min_6 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $val1
	 * @param \System\IntPtr $val2
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function Min_7 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\SByte $val1
	 * @param \System\SByte $val2
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function Min_8 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Single $val1
	 * @param \System\Single $val2
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Min_9 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $val1
	 * @param \System\UInt16 $val2
	 * @return \System\UInt16
	 */
	#[MethodOverride]public static function Min_10 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $val1
	 * @param \System\UInt32 $val2
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function Min_11 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $val1
	 * @param \System\UInt64 $val2
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function Min_12 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $val1
	 * @param \System\UIntPtr $val2
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function Min_13 ($val1, $val2){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Round_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @param \System\Int32|int $decimals
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Round_2 ($d, $decimals){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @param \System\MidpointRounding $mode
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Round_3 ($d, $mode){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @param \System\Int32|int $decimals
	 * @param \System\MidpointRounding $mode
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Round_4 ($d, $decimals, $mode){}
	/**
	 * @deprecated
	 * @param \System\Double|double $a
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Round_5 ($a){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @param \System\Int32|int $digits
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Round_6 ($value, $digits){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @param \System\MidpointRounding $mode
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Round_7 ($value, $mode){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @param \System\Int32|int $digits
	 * @param \System\MidpointRounding $mode
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Round_8 ($value, $digits, $mode){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Sign_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Sign_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Sign_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Sign_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Sign_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Sign_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Sign_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Sign_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Truncate_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\Double|double $d
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Truncate_2 ($d){}
}
class Math extends \System\Object
{
	use MathOverride;

	/**
	 * @field
	 * @var \System\Double|double
	 */
	const E = '2,718281828459045';
	/**
	 * @field
	 * @var \System\Double|double
	 */
	const PI = '3,141592653589793';
	/**
	 * @field
	 * @var \System\Double|double
	 */
	const Tau = '6,283185307179586';
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
	 * @uses MathOverride::Ceiling_1 <br>public , args: ($a)<br>
	 * @uses MathOverride::Ceiling_2 <br>public , args: ($d)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Double|double|\System\Decimal|mixed|\override
	 */
	#[MethodOverridePublic]function Ceiling (\override ...$args){}
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
	 * @uses MathOverride::Floor_1 <br>public , args: ($d)<br>
	 * @uses MathOverride::Floor_2 <br>public , args: ($d)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Double|double|\System\Decimal|mixed|\override
	 */
	#[MethodOverridePublic]function Floor (\override ...$args){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @param \System\Double|double $z
	 * @return \System\Double|double
	 */
	public static function FusedMultiplyAdd($x, $y, $z){}
	/**
	 * @uses MathOverride::Log_1 <br>public , args: ($d)<br>
	 * @uses MathOverride::Log_2 <br>public , args: ($a, $newBase)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Double|double|mixed|\override
	 */
	#[MethodOverridePublic]function Log (\override ...$args){}
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
	 * @uses MathOverride::SinCos_1 <br>public , args: ($x)<br>
	 * @uses MathOverride::SinCos_2 <br>private , args: ($x, $sin, $cos)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ValueTuple_2|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SinCos (\override ...$args){}
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
	private static function ModF($x, $intptr){}
	/**
	 * @uses MathOverride::Abs_1 <br>public , args: ($value)<br>
	 * @uses MathOverride::Abs_2 <br>public , args: ($value)<br>
	 * @uses MathOverride::Abs_3 <br>public , args: ($value)<br>
	 * @uses MathOverride::Abs_4 <br>public , args: ($value)<br>
	 * @uses MathOverride::Abs_5 <br>public , args: ($value)<br>
	 * @uses MathOverride::Abs_6 <br>public , args: ($value)<br>
	 * @uses MathOverride::Abs_7 <br>public , args: ($value)<br>
	 * @uses MathOverride::Abs_8 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int16|\System\Int32|int|\System\Int64|int|\System\IntPtr|\System\SByte|\System\Decimal|\System\Double|double|\System\Single|mixed|\override
	 */
	#[MethodOverridePublic]function Abs (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowNegateTwosCompOverflow(){}
	/**
	 * @uses MathOverride::BigMul_1 <br>public , args: ($a, $b)<br>
	 * @uses MathOverride::BigMul_2 <br>public , args: ($a, $b, &$low)<br>
	 * @uses MathOverride::BigMul_3 <br>public , args: ($a, $b, &$low)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|\System\UInt64|mixed|\override
	 */
	#[MethodOverridePublic]function BigMul (\override ...$args){}
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
	 * @uses MathOverride::DivRem_1 <br>public , args: ($a, $b, &$result)<br>
	 * @uses MathOverride::DivRem_2 <br>public , args: ($a, $b, &$result)<br>
	 * @uses MathOverride::DivRem_3 <br>public , args: ($left, $right)<br>
	 * @uses MathOverride::DivRem_4 <br>public , args: ($left, $right)<br>
	 * @uses MathOverride::DivRem_5 <br>public , args: ($left, $right)<br>
	 * @uses MathOverride::DivRem_6 <br>public , args: ($left, $right)<br>
	 * @uses MathOverride::DivRem_7 <br>public , args: ($left, $right)<br>
	 * @uses MathOverride::DivRem_8 <br>public , args: ($left, $right)<br>
	 * @uses MathOverride::DivRem_9 <br>public , args: ($left, $right)<br>
	 * @uses MathOverride::DivRem_10 <br>public , args: ($left, $right)<br>
	 * @uses MathOverride::DivRem_11 <br>public , args: ($left, $right)<br>
	 * @uses MathOverride::DivRem_12 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Int64|int|\System\ValueTuple_2|mixed|\override
	 */
	#[MethodOverridePublic]function DivRem (\override ...$args){}
	/**
	 * @uses MathOverride::Clamp_1 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathOverride::Clamp_2 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathOverride::Clamp_3 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathOverride::Clamp_4 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathOverride::Clamp_5 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathOverride::Clamp_6 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathOverride::Clamp_7 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathOverride::Clamp_8 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathOverride::Clamp_9 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathOverride::Clamp_10 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathOverride::Clamp_11 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathOverride::Clamp_12 <br>public , args: ($value, $min, $max)<br>
	 * @uses MathOverride::Clamp_13 <br>public , args: ($value, $min, $max)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|\System\Decimal|\System\Double|double|\System\Int16|\System\Int32|int|\System\Int64|int|\System\IntPtr|\System\SByte|\System\Single|\System\UInt16|\System\UInt32|\System\UInt64|\System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function Clamp (\override ...$args){}
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
	 * @uses MathOverride::Max_1 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Max_2 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Max_3 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Max_4 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Max_5 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Max_6 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Max_7 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Max_8 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Max_9 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Max_10 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Max_11 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Max_12 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Max_13 <br>public , args: ($val1, $val2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|\System\Decimal|\System\Double|double|\System\Int16|\System\Int32|int|\System\Int64|int|\System\IntPtr|\System\SByte|\System\Single|\System\UInt16|\System\UInt32|\System\UInt64|\System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function Max (\override ...$args){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Double|double
	 */
	public static function MaxMagnitude($x, $y){}
	/**
	 * @uses MathOverride::Min_1 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Min_2 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Min_3 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Min_4 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Min_5 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Min_6 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Min_7 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Min_8 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Min_9 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Min_10 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Min_11 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Min_12 <br>public , args: ($val1, $val2)<br>
	 * @uses MathOverride::Min_13 <br>public , args: ($val1, $val2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|\System\Decimal|\System\Double|double|\System\Int16|\System\Int32|int|\System\Int64|int|\System\IntPtr|\System\SByte|\System\Single|\System\UInt16|\System\UInt32|\System\UInt64|\System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function Min (\override ...$args){}
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
	 * @uses MathOverride::Round_1 <br>public , args: ($d)<br>
	 * @uses MathOverride::Round_2 <br>public , args: ($d, $decimals)<br>
	 * @uses MathOverride::Round_3 <br>public , args: ($d, $mode)<br>
	 * @uses MathOverride::Round_4 <br>public , args: ($d, $decimals, $mode)<br>
	 * @uses MathOverride::Round_5 <br>public , args: ($a)<br>
	 * @uses MathOverride::Round_6 <br>public , args: ($value, $digits)<br>
	 * @uses MathOverride::Round_7 <br>public , args: ($value, $mode)<br>
	 * @uses MathOverride::Round_8 <br>public , args: ($value, $digits, $mode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Decimal|\System\Double|double|mixed|\override
	 */
	#[MethodOverridePublic]function Round (\override ...$args){}
	/**
	 * @uses MathOverride::Sign_1 <br>public , args: ($value)<br>
	 * @uses MathOverride::Sign_2 <br>public , args: ($value)<br>
	 * @uses MathOverride::Sign_3 <br>public , args: ($value)<br>
	 * @uses MathOverride::Sign_4 <br>public , args: ($value)<br>
	 * @uses MathOverride::Sign_5 <br>public , args: ($value)<br>
	 * @uses MathOverride::Sign_6 <br>public , args: ($value)<br>
	 * @uses MathOverride::Sign_7 <br>public , args: ($value)<br>
	 * @uses MathOverride::Sign_8 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Sign (\override ...$args){}
	/**
	 * @uses MathOverride::Truncate_1 <br>public , args: ($d)<br>
	 * @uses MathOverride::Truncate_2 <br>public , args: ($d)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Decimal|\System\Double|double|mixed|\override
	 */
	#[MethodOverridePublic]function Truncate (\override ...$args){}
	/**
	 * @param \T|object $min
	 * @param \T|object $max
	 * @return \System\Void|void
	 */
	protected static function ThrowMinMaxException($min, $max){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Int32|int $n
	 * @return \System\Double|double
	 */
	public static function ScaleB($x, $n){}
}