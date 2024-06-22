<?php
namespace System\Runtime\Serialization;
interface IFormatterConverter
{


	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	public function Convert($value, $type);
	/**
	 * @param \System\Object|object $value
	 * @param \System\TypeCode $typeCode
	 * @return \System\Object|object
	 */
	public function Convert($value, $typeCode);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	public function ToBoolean($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Char
	 */
	public function ToChar($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\SByte
	 */
	public function ToSByte($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Byte
	 */
	public function ToByte($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Int16
	 */
	public function ToInt16($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\UInt16
	 */
	public function ToUInt16($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	public function ToInt32($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\UInt32
	 */
	public function ToUInt32($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Int64|int
	 */
	public function ToInt64($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\UInt64
	 */
	public function ToUInt64($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Single
	 */
	public function ToSingle($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Double|double
	 */
	public function ToDouble($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Decimal
	 */
	public function ToDecimal($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\DateTime
	 */
	public function ToDateTime($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\String|string
	 */
	public function ToString($value);
}