<?php
namespace System;
/**
 */
class ParsingInfo extends \System\ValueType
{
	/**
	 * @var \System\Globalization\Calendar
	 * @field
	 */
	protected $calendar;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $dayOfWeek;
	/**
	 * @var \System\DateTimeParse+TM
	 * @field
	 */
	protected $timeMark;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $fUseHour12;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $fUseTwoDigitYear;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $fAllowInnerWhite;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $fAllowTrailingWhite;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $fCustomNumberParser;
	/**
	 * @var \System\DateTimeParse+MatchNumberDelegate
	 * @field
	 */
	protected $parseNumberDelegate;
	/**
	 * @return \System\Void|void
	 */
	protected  function Init(){}
}
