<?php
namespace System;
/**
 */
class FloatingPointInfo extends \System\ValueType
{
	/**
	 * @var \System\Number+FloatingPointInfo
	 * @field
	 */
	public readonly $Double;
	/**
	 * @var \System\Number+FloatingPointInfo
	 * @field
	 */
	public readonly $Single;
	/**
	 * @var \System\Number+FloatingPointInfo
	 * @field
	 */
	public readonly $Half;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $ZeroBits;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $InfinityBits;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $NormalMantissaMask;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $DenormalMantissaMask;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MinBinaryExponent;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaxBinaryExponent;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ExponentBias;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $OverflowDecimalExponent;
	/**
	 * @var \System\UInt16
	 * @property
	 */
	public readonly $NormalMantissaBits;
	/**
	 * @var \System\UInt16
	 * @property
	 */
	public readonly $DenormalMantissaBits;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MinFastFloatDecimalExponent;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $InfinityExponent;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MinExponentRoundToEven;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaxExponentRoundToEven;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaxExponentFastPath;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaxFastFloatDecimalExponent;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $MaxMantissaFastPath;
	/**
	 * @return \System\UInt64
	 */
	public  function get_ZeroBits(){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_InfinityBits(){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_NormalMantissaMask(){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_DenormalMantissaMask(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MinBinaryExponent(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaxBinaryExponent(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ExponentBias(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_OverflowDecimalExponent(){}
	/**
	 * @return \System\UInt16
	 */
	public  function get_NormalMantissaBits(){}
	/**
	 * @return \System\UInt16
	 */
	public  function get_DenormalMantissaBits(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MinFastFloatDecimalExponent(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_InfinityExponent(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MinExponentRoundToEven(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaxExponentRoundToEven(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaxExponentFastPath(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaxFastFloatDecimalExponent(){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_MaxMantissaFastPath(){}
}
