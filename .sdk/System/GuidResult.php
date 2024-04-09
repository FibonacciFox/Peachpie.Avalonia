<?php
namespace System;
final class GuidResult extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $_a;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $_bc;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	protected $_b;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	protected $_c;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $_defg;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	protected $_de;
	/**
	 * @field
	 * @var \System\Byte
	 */
	protected $_d;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	protected $_fg;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $_hijk;
	/**
	 * @param \System\Boolean|bool $overflow
	 * @param \System\String|string $failureMessageID
	 * @return \System\Void|void
	 */
	protected function SetFailure($overflow, $failureMessageID){}
	/**
	 * @return \System\Guid
	 */
	public function ToGuid(){}
}