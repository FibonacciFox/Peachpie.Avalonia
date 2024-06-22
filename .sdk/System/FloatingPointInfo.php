<?php
namespace System;
final class FloatingPointInfo extends \System\ValueType
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Number+FloatingPointInfo
	 */
	public static $Double;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Number+FloatingPointInfo
	 */
	public static $Single;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Number+FloatingPointInfo
	 */
	public static $Half;
	/**
	 * @property
	 * @var \System\UInt64
	 * @since readonly
	 */
	public $ZeroBits;
	/**
	 * @property
	 * @var \System\UInt64
	 * @since readonly
	 */
	public $InfinityBits;
	/**
	 * @property
	 * @var \System\UInt64
	 * @since readonly
	 */
	public $NormalMantissaMask;
	/**
	 * @property
	 * @var \System\UInt64
	 * @since readonly
	 */
	public $DenormalMantissaMask;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MinBinaryExponent;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxBinaryExponent;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ExponentBias;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $OverflowDecimalExponent;
	/**
	 * @property
	 * @var \System\UInt16
	 * @since readonly
	 */
	public $NormalMantissaBits;
	/**
	 * @property
	 * @var \System\UInt16
	 * @since readonly
	 */
	public $DenormalMantissaBits;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MinFastFloatDecimalExponent;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $InfinityExponent;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MinExponentRoundToEven;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxExponentRoundToEven;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxExponentFastPath;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxFastFloatDecimalExponent;
	/**
	 * @property
	 * @var \System\UInt64
	 * @since readonly
	 */
	public $MaxMantissaFastPath;
	/**
	 * @param \System\UInt16 $denormalMantissaBits
	 * @param \System\UInt16 $exponentBits
	 * @param \System\Int32|int $maxBinaryExponent
	 * @param \System\Int32|int $exponentBias
	 * @param \System\UInt64 $infinityBits
	 * @param \System\Int32|int $minFastFloatDecimalExponent
	 * @param \System\Int32|int $maxFastFloatDecimalExponent
	 * @param \System\Int32|int $infinityExponent
	 * @param \System\Int32|int $minExponentRoundToEven
	 * @param \System\Int32|int $maxExponentRoundToEven
	 * @param \System\Int32|int $maxExponentFastPath
	 */
	public function __construct($denormalMantissaBits, $exponentBits, $maxBinaryExponent, $exponentBias, $infinityBits, $minFastFloatDecimalExponent, $maxFastFloatDecimalExponent, $infinityExponent, $minExponentRoundToEven, $maxExponentRoundToEven, $maxExponentFastPath){}
}