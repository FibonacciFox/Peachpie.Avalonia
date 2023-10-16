<?php
namespace System\Runtime\Serialization;
/**
 */
interface IFormatterConverter
{
	/**
	 * @param \System\Object|object $value
	 */
	public function ToBoolean($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToChar($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToSByte($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToByte($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToInt16($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToUInt16($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToInt32($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToUInt32($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToInt64($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToUInt64($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToSingle($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToDouble($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToDecimal($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToDateTime($value);
	/**
	 * @param \System\Object|object $value
	 */
	public function ToString($value);
}
