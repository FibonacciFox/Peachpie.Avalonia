<?php
namespace System;
/**
 */
class Buf24 extends \System\ValueType
{
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $U0;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $U1;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $U2;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $U3;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $U4;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $U5;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public $Low64;
	/**
	 * @return \System\UInt64
	 */
	public  function get_Low64(){}
	/**
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public  function set_Low64($value){}
	/**
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public  function set_Mid64($value){}
	/**
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public  function set_High64($value){}
}
