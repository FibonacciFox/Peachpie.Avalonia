<?php
namespace System;
final class EnumInfo extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	public $HasFlagsAttribute;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt64[]
	 */
	public $Values;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String[]|array
	 */
	public $Names;
	/**
	 * @param \System\Boolean|bool $hasFlagsAttribute
	 * @param \System\UInt64 $values
	 * @param \System\String $names
	 */
	public function __construct($hasFlagsAttribute, $values, $names){}
}