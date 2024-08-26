<?php

final class ParsedStatus extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\UInt64
	 */
	protected $VmHWM;
	/**
	 * @field
	 * @var \System\UInt64
	 */
	protected $VmRSS;
	/**
	 * @field
	 * @var \System\UInt64
	 */
	protected $VmData;
	/**
	 * @field
	 * @var \System\UInt64
	 */
	protected $VmSwap;
	/**
	 * @field
	 * @var \System\UInt64
	 */
	protected $VmSize;
	/**
	 * @field
	 * @var \System\UInt64
	 */
	protected $VmPeak;

}