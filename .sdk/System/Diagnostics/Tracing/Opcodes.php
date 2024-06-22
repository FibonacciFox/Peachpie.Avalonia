<?php
namespace System\Diagnostics\Tracing;
class Opcodes extends \System\Object
{

	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 */
	const IOEnqueue = '13';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 */
	const IODequeue = '14';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 */
	const IOPack = '15';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 */
	const Wait = '90';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 */
	const Sample = '100';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 */
	const Adjustment = '101';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 */
	const Stats = '102';

}