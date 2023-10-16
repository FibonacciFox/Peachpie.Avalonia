<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DiyFpMethodsOverride
{
	/**
	 * @return \System\DiyFp
	 */
	#[MethodOverride] public static function CreateAndGetBoundaries_1($value, $mMinus, $mPlus){}
	/**
	 * @return \System\DiyFp
	 */
	#[MethodOverride] public static function CreateAndGetBoundaries_2($value, $mMinus, $mPlus){}
	/**
	 * @return \System\DiyFp
	 */
	#[MethodOverride] public static function CreateAndGetBoundaries_3($value, $mMinus, $mPlus){}
}
/**
 */
class DiyFp extends \System\ValueType
{
	/**
	 * @var \System\UInt64
	 * @field
	 */
	public readonly $f;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $e;
	/**
	 * @uses DiyFpMethodsOverride::CreateAndGetBoundaries_1 ($value, $mMinus, $mPlus)
	 * @uses DiyFpMethodsOverride::CreateAndGetBoundaries_2 ($value, $mMinus, $mPlus)
	 * @uses DiyFpMethodsOverride::CreateAndGetBoundaries_3 ($value, $mMinus, $mPlus)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateAndGetBoundaries(mixed ...$args){}
	/**
	 * @param \System\DiyFp& $other
	 * @return \System\DiyFp
	 */
	public  function Multiply($other){}
	/**
	 * @return \System\DiyFp
	 */
	public  function Normalize(){}
	/**
	 * @param \System\DiyFp& $other
	 * @return \System\DiyFp
	 */
	public  function Subtract($other){}
	/**
	 * @param \System\Int32|int $implicitBitIndex
	 * @param \System\DiyFp& $mMinus
	 * @param \System\DiyFp& $mPlus
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetBoundaries($implicitBitIndex, $mMinus, $mPlus){}
}
