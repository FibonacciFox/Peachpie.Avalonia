<?php
namespace System;
final class PowerOvfl extends \System\ValueType
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt32
	 */
	public $Hi;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt64
	 */
	public $MidLo;
	/**
	 * @param \System\UInt32 $hi
	 * @param \System\UInt32 $mid
	 * @param \System\UInt32 $lo
	 */
	public function __construct($hi, $mid, $lo){}
}