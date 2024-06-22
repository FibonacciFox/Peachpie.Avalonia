<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MathFOverride {
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Log_1 ($x){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Log_2 ($x, $y){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function SinCos_1 ($x){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @param \System\Single* $sin
	 * @param \System\Single* $cos
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function SinCos_2 ($x, $sin, $cos){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Round_1 ($x){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @param \System\Int32|int $digits
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Round_2 ($x, $digits){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @param \System\MidpointRounding $mode
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Round_3 ($x, $mode){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @param \System\Int32|int $digits
	 * @param \System\MidpointRounding $mode
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Round_4 ($x, $digits, $mode){}
}
class MathF extends \System\Object
{
	use MathFOverride;

	/**
	 * @field
	 * @var \System\Single
	 */
	const E = '2,7182817';
	/**
	 * @field
	 * @var \System\Single
	 */
	const PI = '3,1415927';
	/**
	 * @field
	 * @var \System\Single
	 */
	const Tau = '6,2831855';
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
	 * @uses MathFOverride::Log_1 <br>public , args: ($x)<br>
	 * @uses MathFOverride::Log_2 <br>public , args: ($x, $y)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Single|mixed|\override
	 */
	#[MethodOverridePublic]function Log (\override ...$args){}
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
	 * @uses MathFOverride::SinCos_1 <br>public , args: ($x)<br>
	 * @uses MathFOverride::SinCos_2 <br>private , args: ($x, $sin, $cos)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ValueTuple_2|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SinCos (\override ...$args){}
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
	private static function ModF($x, $intptr){}
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
	 * @uses MathFOverride::Round_1 <br>public , args: ($x)<br>
	 * @uses MathFOverride::Round_2 <br>public , args: ($x, $digits)<br>
	 * @uses MathFOverride::Round_3 <br>public , args: ($x, $mode)<br>
	 * @uses MathFOverride::Round_4 <br>public , args: ($x, $digits, $mode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Single|mixed|\override
	 */
	#[MethodOverridePublic]function Round (\override ...$args){}
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
}