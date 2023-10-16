<?php
namespace System;
/**
 */
interface IConvertible
{
	/**
	 */
	public function GetTypeCode();
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToBoolean($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToChar($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToSByte($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToByte($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToInt16($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToUInt16($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToInt32($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToUInt32($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToInt64($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToUInt64($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToSingle($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToDouble($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToDecimal($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToDateTime($provider);
	/**
	 * @param \System\IFormatProvider $provider
	 */
	public function ToString($provider);
	/**
	 * @param \System\Type $conversionType
	 * @param \System\IFormatProvider $provider
	 */
	public function ToType($conversionType, $provider);
}
