<?php
namespace System\Collections\Generic;
final class KeyValuePair_2 extends \System\ValueType
{
	/**
	 * @property
	 * @var \TKey
	 * @since readonly
	 */
	public $Key;
	/**
	 * @property
	 * @var \TValue
	 * @since readonly
	 */
	public $Value;
	/**
	 * @param \TKey& &$key
	 * @param \TValue& &$value
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$key, &$value){}
	/**
	 * @param \TKey $key
	 * @param \TValue $value
	 */
	public function __construct($key, $value){}
}