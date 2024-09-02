<?php
namespace System\Globalization;
final class DaylightTimeStruct extends \System\ValueType
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\DateTime
	 */
	public $Start;
	/**
	 * @field
	 * @since readonly
	 * @var \System\DateTime
	 */
	public $End;
	/**
	 * @field
	 * @since readonly
	 * @var \System\TimeSpan
	 */
	public $Delta;
	/**
	 * @param \System\DateTime $start
	 * @param \System\DateTime $end
	 * @param \System\TimeSpan $delta
	 */
	public function __construct($start, $end, $delta){}
}