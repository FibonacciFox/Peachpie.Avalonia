<?php
namespace System;
final class ByReference extends \System\ValueType
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Byte&
	 */
	public $Value;
	/**
	 * @param \T& $p
	 * @return \System\ByReference
	 */
	public static function Create($p){}
	/**
	 * @param \System\Byte& $value
	 */
	public function __construct($value){}
}