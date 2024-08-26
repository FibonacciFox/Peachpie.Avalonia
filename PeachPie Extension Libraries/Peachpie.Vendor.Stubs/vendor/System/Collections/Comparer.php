<?php
namespace System\Collections;
final class Comparer extends \System\Object implements
	\System\Collections\IComparer,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Comparer
	 */
	public static $Default;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Comparer
	 */
	public static $DefaultInvariant;
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $a
	 * @param \System\Object|object $b
	 * @return \System\Int32|int
	 */
	public function Compare($a, $b){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 */
	public function __construct($culture){}
}