<?php
namespace System;
final class DateTimeRawInfo extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $numCount;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $month;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $year;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $dayOfWeek;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $era;
	/**
	 * @field
	 * @var \System\DateTimeParse+TM
	 */
	protected $timeMark;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $fraction;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $hasSameDateAndTimeSeparators;
	/**
	 * @param \System\Int32* $numberBuffer
	 * @return \System\Void|void
	 */
	protected function Init($numberBuffer){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	protected function AddNumber($value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Int32|int
	 */
	protected function GetNumber($index){}
}