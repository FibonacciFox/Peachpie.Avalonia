<?php
namespace System;
/**
 */
class GuidResult extends \System\ValueType
{
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $_a;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $_bc;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $_b;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $_c;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $_defg;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $_de;
	/**
	 * @var \System\Byte
	 * @field
	 */
	protected $_d;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $_fg;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $_hijk;
	/**
	 * @param \System\Boolean $overflow
	 * @param \System\String|string $failureMessageID
	 * @return \System\Void|void
	 */
	protected  function SetFailure($overflow, $failureMessageID){}
	/**
	 * @return \System\Guid
	 */
	public  function ToGuid(){}
}
