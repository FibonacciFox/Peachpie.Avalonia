<?php
namespace System;
final class TZifType extends \System\ValueType
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\TimeSpan
	 */
	public $UtcOffset;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	public $IsDst;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Byte
	 */
	public $AbbreviationIndex;
	/**
	 * @param \System\Byte $data
	 * @param \System\Int32|int $index
	 */
	public function __construct($data, $index){}
}