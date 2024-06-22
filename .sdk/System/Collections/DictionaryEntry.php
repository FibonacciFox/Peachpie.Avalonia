<?php
namespace System\Collections;
final class DictionaryEntry extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Key;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Value;
	/**
	 * @param \System\Object& &$key
	 * @param \System\Object& &$value
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$key, &$value){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 */
	public function __construct($key, $value){}
}