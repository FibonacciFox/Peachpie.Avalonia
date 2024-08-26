<?php
namespace System;
interface IConvertible
{

	/**
	 * @return \System\TypeCode
	 */
	public function GetTypeCode();
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean|bool
	 */
	public function ToBoolean($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Char
	 */
	public function ToChar($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\SByte
	 */
	public function ToSByte($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Byte
	 */
	public function ToByte($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Int16
	 */
	public function ToInt16($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\UInt16
	 */
	public function ToUInt16($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Int32|int
	 */
	public function ToInt32($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\UInt32
	 */
	public function ToUInt32($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Int64|int
	 */
	public function ToInt64($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\UInt64
	 */
	public function ToUInt64($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Single
	 */
	public function ToSingle($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Double|double
	 */
	public function ToDouble($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Decimal
	 */
	public function ToDecimal($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\DateTime
	 */
	public function ToDateTime($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	public function ToString($provider);
	/**
	 * @param \System\Type $conversionType
	 * @param \System\IFormatProvider $provider
	 * @return \System\Object|object
	 */
	public function ToType($conversionType, $provider);
}