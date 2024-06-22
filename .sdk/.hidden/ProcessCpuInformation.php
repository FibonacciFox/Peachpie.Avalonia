<?php

final class ProcessCpuInformation extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\UInt64
	 */
	protected $lastRecordedCurrentTime;
	/**
	 * @field
	 * @var \System\UInt64
	 */
	protected $lastRecordedKernelTime;
	/**
	 * @field
	 * @var \System\UInt64
	 */
	protected $lastRecordedUserTime;

}