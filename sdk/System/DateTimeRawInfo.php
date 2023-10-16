<?php
namespace System;
/**
 */
class DateTimeRawInfo extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $numCount;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $month;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $year;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $dayOfWeek;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $era;
	/**
	 * @var \System\DateTimeParse+TM
	 * @field
	 */
	protected $timeMark;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $fraction;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $hasSameDateAndTimeSeparators;
	/**
	 * @param \System\Int32* $numberBuffer
	 * @return \System\Void|void
	 */
	protected  function Init($numberBuffer){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	protected  function AddNumber($value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Int32|int
	 */
	protected  function GetNumber($index){}
}
