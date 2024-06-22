<?php
namespace System;
final class TZifHead extends \System\ValueType
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt32
	 */
	public $Magic;
	/**
	 * @field
	 * @since readonly
	 * @var \System\TimeZoneInfo+TZVersion
	 */
	public $Version;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt32
	 */
	public $IsGmtCount;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt32
	 */
	public $IsStdCount;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt32
	 */
	public $LeapCount;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt32
	 */
	public $TimeCount;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt32
	 */
	public $TypeCount;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt32
	 */
	public $CharCount;
	/**
	 * @param \System\Byte $data
	 * @param \System\Int32|int $index
	 */
	public function __construct($data, $index){}
}