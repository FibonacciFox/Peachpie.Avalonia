<?php
namespace System\Runtime\CompilerServices;
final class DateTimeConstantAttribute extends \System\Runtime\CompilerServices\CustomConstantAttribute
{

	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Int64|int $ticks
	 */
	public function __construct($ticks){}
}