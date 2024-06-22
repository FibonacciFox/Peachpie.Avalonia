<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DecCalcOverride {
	/**
	 * @deprecated
	 * @param \System\Single $f
	 * @return \System\UInt32
	 */
	#[MethodOverride]private static function GetExponent_1 ($f){}
	/**
	 * @deprecated
	 * @param \System\Double|double $d
	 * @return \System\UInt32
	 */
	#[MethodOverride]private static function GetExponent_2 ($d){}
	/**
	 * @deprecated
	 * @param \System\Decimal& &$d
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function GetHashCode_1 (&$d){}
}
final class DecCalc extends \System\ValueType
{
	use DecCalcOverride;


	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses DecCalcOverride::GetExponent_1 <br>private , args: ($f)<br>
	 * @uses DecCalcOverride::GetExponent_2 <br>private , args: ($d)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt32|mixed|\override
	 */
	#[MethodOverridePrivate]function GetExponent (\override ...$args){}
	private static function UInt32x32To64($a, $b){}
	private static function UInt64x64To128($a, $b, $result){}
	private static function Div96By32($bufNum, $den){}
	private static function Div96ByConst($high64, $low, $pow){}
	private static function Unscale($low, $high64, $scale){}
	private static function Div96By64($bufNum, $den){}
	private static function Div128By96($bufNum, $bufDen){}
	private static function IncreaseScale($bufNum, $power){}
	private static function IncreaseScale64($bufNum, $power){}
	private static function ScaleResult($bufRes, $hiRes, $scale){}
	private static function DivByConst($result, $hiRes, &$quotient, &$remainder, $power){}
	private static function OverflowUnscale($bufQuo, $scale, $sticky){}
	private static function SearchScale($bufQuo, $scale){}
	private static function Add32To96($bufNum, $value){}
	/**
	 * @param \System\Decimal+DecCalc& $d1
	 * @param \System\Decimal+DecCalc& $d2
	 * @param \System\Boolean|bool $sign
	 * @return \System\Void|void
	 */
	protected static function DecAddSub($d1, $d2, $sign){}
	/**
	 * @param \System\Decimal+DecCalc& $pdecIn
	 * @return \System\Int64|int
	 */
	protected static function VarCyFromDec($pdecIn){}
	/**
	 * @param \System\Decimal& &$d1
	 * @param \System\Decimal& &$d2
	 * @return \System\Int32|int
	 */
	protected static function VarDecCmp(&$d1, &$d2){}
	private static function VarDecCmpSub(&$d1, &$d2){}
	/**
	 * @param \System\Decimal+DecCalc& $d1
	 * @param \System\Decimal+DecCalc& $d2
	 * @return \System\Void|void
	 */
	protected static function VarDecMul($d1, $d2){}
	/**
	 * @param \System\Single $input
	 * @param \System\Decimal+DecCalc& &$result
	 * @return \System\Void|void
	 */
	protected static function VarDecFromR4($input, &$result){}
	/**
	 * @param \System\Double|double $input
	 * @param \System\Decimal+DecCalc& &$result
	 * @return \System\Void|void
	 */
	protected static function VarDecFromR8($input, &$result){}
	/**
	 * @param \System\Decimal& &$value
	 * @return \System\Single
	 */
	protected static function VarR4FromDec(&$value){}
	/**
	 * @param \System\Decimal& &$value
	 * @return \System\Double|double
	 */
	protected static function VarR8FromDec(&$value){}
	/**
	 * @param \System\Decimal+DecCalc& $d1
	 * @param \System\Decimal+DecCalc& $d2
	 * @return \System\Void|void
	 */
	protected static function VarDecDiv($d1, $d2){}
	/**
	 * @param \System\Decimal+DecCalc& $d1
	 * @param \System\Decimal+DecCalc& $d2
	 * @return \System\Void|void
	 */
	protected static function VarDecMod($d1, $d2){}
	private static function VarDecModFull($d1, $d2, $scale){}
	/**
	 * @param \System\Decimal+DecCalc& $d
	 * @param \System\UInt32 $scale
	 * @param \System\MidpointRounding $mode
	 * @return \System\Void|void
	 */
	protected static function InternalRound($d, $scale, $mode){}
	/**
	 * @param \System\Decimal+DecCalc& $value
	 * @return \System\UInt32
	 */
	protected static function DecDivMod1E9($value){}
}