<?php
namespace System;
final class ParsingInfo extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Globalization\Calendar
	 */
	protected $calendar;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $dayOfWeek;
	/**
	 * @field
	 * @var \System\DateTimeParse+TM
	 */
	protected $timeMark;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $fUseHour12;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $fUseTwoDigitYear;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $fAllowInnerWhite;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $fAllowTrailingWhite;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $fCustomNumberParser;
	/**
	 * @field
	 * @var \System\DateTimeParse+MatchNumberDelegate
	 */
	protected $parseNumberDelegate;
	/**
	 * @return \System\Void|void
	 */
	protected function Init(){}
}