<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DecCalcMethodsOverride
{
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] private static function GetExponent_1($f){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] private static function GetExponent_2($d){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function GetHashCode_1($d){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2(){}
}
/**
 */
class DecCalc extends \System\ValueType
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_High(){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_High($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Low(){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Low($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Mid(){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Mid($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsNegative(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Scale(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Low64(){}
	/**
	 * @param \System\UInt64 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Low64($value){}
	/**
	 * @uses DecCalcMethodsOverride::GetExponent_1 ($f)
	 * @uses DecCalcMethodsOverride::GetExponent_2 ($d)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetExponent(mixed ...$args){}
	/**
	 * @param \System\UInt32 $a
	 * @param \System\UInt32 $b
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt32x32To64($a, $b){}
	/**
	 * @param \System\UInt64 $a
	 * @param \System\UInt64 $b
	 * @param \System\DecCalc& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt64x64To128($a, $b, $result){}
	/**
	 * @param \System\Buf12& $bufNum
	 * @param \System\UInt32 $den
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Div96By32($bufNum, $den){}
	/**
	 * @param \System\UInt64& $high64
	 * @param \System\UInt32& $low
	 * @param \System\UInt32 $pow
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Div96ByConst($high64, $low, $pow){}
	/**
	 * @param \System\UInt32& $low
	 * @param \System\UInt64& $high64
	 * @param \System\Int32& $scale
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Unscale($low, $high64, $scale){}
	/**
	 * @param \System\Buf12& $bufNum
	 * @param \System\UInt64 $den
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Div96By64($bufNum, $den){}
	/**
	 * @param \System\Buf16& $bufNum
	 * @param \System\Buf12& $bufDen
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Div128By96($bufNum, $bufDen){}
	/**
	 * @param \System\Buf12& $bufNum
	 * @param \System\UInt32 $power
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IncreaseScale($bufNum, $power){}
	/**
	 * @param \System\Buf12& $bufNum
	 * @param \System\UInt32 $power
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IncreaseScale64($bufNum, $power){}
	/**
	 * @param \System\Buf24* $bufRes
	 * @param \System\UInt32 $hiRes
	 * @param \System\Int32|int $scale
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ScaleResult($bufRes, $hiRes, $scale){}
	/**
	 * @param \System\UInt32* $result
	 * @param \System\UInt32 $hiRes
	 * @param \System\UInt32& $quotient
	 * @param \System\UInt32& $remainder
	 * @param \System\UInt32 $power
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DivByConst($result, $hiRes, $quotient, $remainder, $power){}
	/**
	 * @param \System\Buf12& $bufQuo
	 * @param \System\Int32|int $scale
	 * @param \System\Boolean $sticky
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OverflowUnscale($bufQuo, $scale, $sticky){}
	/**
	 * @param \System\Buf12& $bufQuo
	 * @param \System\Int32|int $scale
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SearchScale($bufQuo, $scale){}
	/**
	 * @param \System\Buf12& $bufNum
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Add32To96($bufNum, $value){}
	/**
	 * @param \System\DecCalc& $d1
	 * @param \System\DecCalc& $d2
	 * @param \System\Boolean $sign
	 * @return \System\Void|void
	 */
	protected static function DecAddSub($d1, $d2, $sign){}
	/**
	 * @param \System\DecCalc& $pdecIn
	 * @return \System\Int64|int
	 */
	protected static function VarCyFromDec($pdecIn){}
	/**
	 * @param \System\Decimal& $d1
	 * @param \System\Decimal& $d2
	 * @return \System\Int32|int
	 */
	protected static function VarDecCmp($d1, $d2){}
	/**
	 * @param \System\Decimal& $d1
	 * @param \System\Decimal& $d2
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function VarDecCmpSub($d1, $d2){}
	/**
	 * @param \System\DecCalc& $d1
	 * @param \System\DecCalc& $d2
	 * @return \System\Void|void
	 */
	protected static function VarDecMul($d1, $d2){}
	/**
	 * @param \System\Single $input
	 * @param \System\DecCalc& $result
	 * @return \System\Void|void
	 */
	protected static function VarDecFromR4($input, $result){}
	/**
	 * @param \System\Double|double $input
	 * @param \System\DecCalc& $result
	 * @return \System\Void|void
	 */
	protected static function VarDecFromR8($input, $result){}
	/**
	 * @param \System\Decimal& $value
	 * @return \System\Single
	 */
	protected static function VarR4FromDec($value){}
	/**
	 * @param \System\Decimal& $value
	 * @return \System\Double|double
	 */
	protected static function VarR8FromDec($value){}
	/**
	 * @uses DecCalcMethodsOverride::GetHashCode_1 ($d)
	 * @uses DecCalcMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @param \System\DecCalc& $d1
	 * @param \System\DecCalc& $d2
	 * @return \System\Void|void
	 */
	protected static function VarDecDiv($d1, $d2){}
	/**
	 * @param \System\DecCalc& $d1
	 * @param \System\DecCalc& $d2
	 * @return \System\Void|void
	 */
	protected static function VarDecMod($d1, $d2){}
	/**
	 * @param \System\DecCalc& $d1
	 * @param \System\DecCalc& $d2
	 * @param \System\Int32|int $scale
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function VarDecModFull($d1, $d2, $scale){}
	/**
	 * @param \System\DecCalc& $d
	 * @param \System\UInt32 $scale
	 * @param \System\MidpointRounding $mode
	 * @return \System\Void|void
	 */
	protected static function InternalRound($d, $scale, $mode){}
	/**
	 * @param \System\DecCalc& $value
	 * @return \System\UInt32
	 */
	protected static function DecDivMod1E9($value){}
}
